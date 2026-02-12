<?php

namespace Brevo\Account;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Account\Types\GetAccountResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\Account\Requests\GetAccountActivityRequest;
use Brevo\Account\Types\GetAccountActivityResponse;

class AccountClient implements AccountClientInterface
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
     * Retrieves details of your Brevo account.
     *
     * **Use this to:**
     * - Get account information (email, name, company, address)
     * - Check plan details (type, credits, expiration)
     * - Get relay information (for transactional emails)
     * - Check Marketing Automation status
     * - View date/time preferences and account settings
     * - Access organization and user identifiers
     *
     * **Key information returned:**
     * - Complete account details (organization ID, user ID, company information)
     * - Address and contact information
     * - Plan configurations and credit allocations across different verticals
     * - Marketing Automation settings and tracker key
     * - SMTP relay configuration for transactional emails
     * - Date/time preferences and account settings
     * - Enterprise features availability status
     *
     * **Important considerations:**
     * - Provides comprehensive account overview for billing and configuration management
     * - Essential for understanding current plan limitations and feature availability
     * - Marketing Automation key required for advanced automation features
     * - Plan verticals show detailed breakdown across Marketing, Chat, and CRM categories
     * - Relay configuration crucial for transactional email setup and deliverability
     * - Date/time preferences affect campaign scheduling and reporting displays
     * - Enterprise status determines access to advanced features and sub-account management
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAccountResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAccount(?array $options = null): GetAccountResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "account",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetAccountResponse::fromJson($json);
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
     * Retrieves user activity logs from your organization for security monitoring and audit compliance.
     *
     * Use this to:
     * - Monitor user login activities and access patterns
     * - Track account modifications and configuration changes
     * - Generate security audit reports and compliance documentation
     * - Investigate suspicious activities and unauthorized access
     * - Monitor team member actions and account usage
     *
     * Key information returned:
     * - Complete user activity details and timestamps
     * - User identification (email, IP address, browser)
     * - Action types and activity descriptions
     * - Security-relevant events and access logs
     * - Historical activity data for audit trails
     *
     * Note: Requires Enterprise plan for access to organization activity logs.
     *
     * @param GetAccountActivityRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAccountActivityResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAccountActivity(GetAccountActivityRequest $request = new GetAccountActivityRequest(), ?array $options = null): GetAccountActivityResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->email != null) {
            $query['email'] = $request->email;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/activities",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetAccountActivityResponse::fromJson($json);
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
}
