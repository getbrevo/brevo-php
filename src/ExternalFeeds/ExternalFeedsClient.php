<?php

namespace Brevo\ExternalFeeds;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\ExternalFeeds\Requests\GetAllExternalFeedsRequest;
use Brevo\ExternalFeeds\Types\GetAllExternalFeedsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonSerializer;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\ExternalFeeds\Requests\CreateExternalFeedRequest;
use Brevo\ExternalFeeds\Types\CreateExternalFeedResponse;
use Brevo\ExternalFeeds\Types\GetExternalFeedByUuidResponse;
use Brevo\ExternalFeeds\Requests\UpdateExternalFeedRequest;

class ExternalFeedsClient implements ExternalFeedsClientInterface
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
     * Retrieves all external feeds from your Brevo account with filtering and pagination.
     *
     * **Use this to:**
     * - Get an overview of all external data feeds
     * - Find feeds by name using search functionality
     * - Filter feeds by creation date range
     * - Browse feeds by authentication type
     * - Monitor feed library organization and usage
     *
     * **Key information returned:**
     * - Feed details (UUID, name, URL, authentication type)
     * - Feed configuration and settings
     * - Creation and modification timestamps
     * - Feed status and error information
     * - Authentication and header configurations
     *
     * **Important considerations:**
     * - External feeds enable dynamic content in email campaigns
     * - Feeds must be accessible from Brevo servers
     * - Authentication credentials are securely stored
     * - Feed performance affects campaign delivery
     * - Use pagination for accounts with many feeds
     * - Date range filtering limited to 30 days maximum
     * - Search functionality works on feed name matching
     * - Internal feeds are system-managed and cannot be modified
     *
     * @param GetAllExternalFeedsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAllExternalFeedsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAllExternalFeeds(GetAllExternalFeedsRequest $request = new GetAllExternalFeedsRequest(), ?array $options = null): GetAllExternalFeedsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->search != null) {
            $query['search'] = $request->search;
        }
        if ($request->startDate != null) {
            $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->authType != null) {
            $query['authType'] = $request->authType;
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
                    path: "feeds",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetAllExternalFeedsResponse::fromJson($json);
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
     * Creates a new external feed for dynamic content in email campaigns.
     *
     * **Use this to:**
     * - Set up external data sources for dynamic content
     * - Configure authentication for protected feeds
     * - Enable real-time content updates in campaigns
     * - Establish connections to product catalogs, blogs, or APIs
     *
     * **Key information returned:**
     * - Created feed UUID for reference in campaigns
     * - Success confirmation
     *
     * **Important considerations:**
     * - Feed URL must be accessible from Brevo infrastructure
     * - Authentication credentials are securely encrypted
     * - Test feed accessibility before campaign use
     * - Consider feed response time for campaign performance
     * - Monitor feed reliability and uptime
     * - Use caching for frequently accessed feeds
     * - Maximum 5 retry attempts allowed for failed requests
     * - Custom headers support for API integration requirements
     *
     * @param CreateExternalFeedRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateExternalFeedResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createExternalFeed(CreateExternalFeedRequest $request, ?array $options = null): CreateExternalFeedResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "feeds",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return CreateExternalFeedResponse::fromJson($json);
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
     * Retrieves details of a specific external feed by its UUID.
     *
     * **Use this to:**
     * - Get complete configuration of an external feed
     * - Check feed authentication settings
     * - Review feed personalization options
     * - Verify feed URL and parameters
     * - Monitor feed modification history
     *
     * **Key information returned:**
     * - Complete feed configuration and settings
     * - Authentication credentials and headers
     * - Personalization and fallback settings
     * - Creation and modification timestamps
     * - Cache and retry configurations
     *
     * **Important considerations:**
     * - UUID must exist in your account
     * - Provides complete feed information for troubleshooting
     * - Essential before making modifications
     * - Shows current feed health status
     * - Useful for debugging feed issues
     *
     * @param string $uuid UUID of the feed to fetch
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetExternalFeedByUuidResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getExternalFeedByUuid(string $uuid, ?array $options = null): GetExternalFeedByUuidResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "feeds/{$uuid}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetExternalFeedByUuidResponse::fromJson($json);
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
     * Updates configuration of an existing external feed.
     *
     * **Use this to:**
     * - Update feed URLs when data sources change
     * - Modify authentication credentials
     * - Change cache and retry settings
     * - Update custom headers
     * - Rename feeds for better organization
     *
     * **Key information returned:**
     * - Success confirmation message
     *
     * **Important considerations:**
     * - Only provided fields will be updated
     * - Feed UUID must exist in your account
     * - Authentication changes require verification
     * - URL changes should be tested before campaign use
     * - Monitor campaigns using this feed after updates
     *
     * @param string $uuid UUID of the feed to update
     * @param UpdateExternalFeedRequest $request
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
    public function updateExternalFeed(string $uuid, UpdateExternalFeedRequest $request = new UpdateExternalFeedRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "feeds/{$uuid}",
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
     * Deletes an external feed from your Brevo account.
     *
     * **Use this to:**
     * - Remove external feeds that are no longer needed
     * - Clean up unused data sources
     * - Remove test or outdated feeds
     * - Maintain organized feed library
     *
     * **Key information returned:**
     * - Success confirmation message
     *
     * **Important considerations:**
     * - This action is PERMANENT and cannot be undone
     * - Feed configuration and history will be lost
     * - Check if feed is used in active campaigns before deletion
     * - Remove feed references from email templates
     * - Consider deactivating instead of deleting if unsure
     *
     * @param string $uuid UUID of the feed to delete
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
    public function deleteExternalFeed(string $uuid, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "feeds/{$uuid}",
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
