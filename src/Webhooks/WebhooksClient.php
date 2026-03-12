<?php

namespace Brevo\Webhooks;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Webhooks\Requests\GetWebhooksRequest;
use Brevo\Webhooks\Types\GetWebhooksResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\Webhooks\Requests\CreateWebhookRequest;
use Brevo\Webhooks\Types\CreateWebhookResponse;
use Brevo\Webhooks\Requests\ExportWebhooksHistoryRequest;
use Brevo\Webhooks\Types\ExportWebhooksHistoryResponse;
use Brevo\Types\GetWebhook;
use Brevo\Webhooks\Requests\UpdateWebhookRequest;

class WebhooksClient implements WebhooksClientInterface
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Retrieves all webhooks from your Brevo account with filtering and sorting options.
     *
     * Use this to:
     * - Monitor webhook configurations and event handling
     * - List webhooks by type (transactional, marketing, inbound)
     * - Review webhook endpoints and authentication
     * - Track webhook creation and modification history
     * - Audit webhook event subscriptions
     *
     * Key information returned:
     * - Complete webhook details and configuration
     * - Event types and channel subscriptions
     * - Authentication and security settings
     * - Webhook URLs and custom headers
     * - Creation and modification timestamps
     *
     * @param GetWebhooksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWebhooksResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getWebhooks(GetWebhooksRequest $request = new GetWebhooksRequest(), ?array $options = null): GetWebhooksResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhooksResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Creates a new webhook to receive real-time notifications for specified events.
     *
     * Use this to:
     * - Set up event notifications for transactional or marketing emails
     * - Configure webhook endpoints for campaign tracking
     * - Enable real-time monitoring of email delivery status
     * - Subscribe to contact list changes and updates
     * - Implement custom event handling and automation
     *
     * Key information returned:
     * - Created webhook ID and configuration
     * - Success confirmation and setup details
     *
     * @param CreateWebhookRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateWebhookResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createWebhook(CreateWebhookRequest $request, ?array $options = null): CreateWebhookResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return CreateWebhookResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * <Note title="This feature is available for Professional and Enterprise plans">
     * To have it activated please send us a request and we will activate it for your account.
     * </Note>
     *
     * Exports webhook event history to CSV format for analysis and reporting.
     *
     * Use this to:
     * - Generate comprehensive webhook event reports
     * - Analyze webhook delivery patterns and success rates
     * - Export event data for external analysis tools
     * - Create historical reports for compliance and auditing
     * - Track webhook performance and reliability metrics
     *
     * Key information returned:
     * - Process ID for tracking export completion
     * - CSV file will be delivered to specified webhook URL
     *
     * @param ExportWebhooksHistoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ExportWebhooksHistoryResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function exportWebhooksHistory(ExportWebhooksHistoryRequest $request, ?array $options = null): ExportWebhooksHistoryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks/export",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return ExportWebhooksHistoryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieves detailed information about a specific webhook configuration.
     *
     * Use this to:
     * - Get complete webhook configuration and settings
     * - Check webhook event subscriptions and triggers
     * - Review authentication and security settings
     * - Verify webhook URL and custom headers
     * - Access webhook creation and modification history
     *
     * Key information returned:
     * - Complete webhook details and configuration
     * - Event types and channel subscriptions
     * - Authentication credentials and methods
     * - Custom headers and request settings
     * - Webhook status and activity information
     *
     * @param int $webhookId Id of the webhook
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWebhook
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getWebhook(int $webhookId, ?array $options = null): GetWebhook
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks/{$webhookId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhook::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Updates an existing webhook configuration and event subscriptions.
     *
     * Use this to:
     * - Modify webhook event subscriptions and triggers
     * - Update webhook URL and endpoint configuration
     * - Change authentication settings and credentials
     * - Adjust custom headers and request parameters
     * - Enable or disable specific webhook events
     *
     * Key information returned:
     * - Success confirmation of webhook updates
     *
     * @param int $webhookId Id of the webhook
     * @param UpdateWebhookRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateWebhook(int $webhookId, UpdateWebhookRequest $request = new UpdateWebhookRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks/{$webhookId}",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Permanently deletes a webhook and stops all event notifications.
     *
     * Use this to:
     * - Remove unused or obsolete webhook configurations
     * - Clean up webhook endpoints and subscriptions
     * - Stop event notifications to specific URLs
     * - Maintain organized webhook management
     *
     * Key information returned:
     * - Success confirmation of webhook deletion
     *
     * @param int $webhookId Id of the webhook
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function deleteWebhook(int $webhookId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webhooks/{$webhookId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
