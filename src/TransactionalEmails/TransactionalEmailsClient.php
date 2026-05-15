<?php

namespace Brevo\TransactionalEmails;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\TransactionalEmails\Requests\GetTransacBlockedContactsRequest;
use Brevo\TransactionalEmails\Types\GetTransacBlockedContactsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\TransactionalEmails\Types\GetBlockedDomainsResponse;
use Brevo\TransactionalEmails\Requests\BlockNewDomainRequest;
use Brevo\TransactionalEmails\Requests\DeleteHardbouncesRequest;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailResponse;
use Brevo\TransactionalEmails\Requests\GetScheduledEmailByIdRequest;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdResponseBatches;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdResponseCreatedAt;
use Brevo\Core\Json\JsonSerializer;
use Brevo\Core\Json\JsonDecoder;
use Brevo\Core\Types\Union;
use Brevo\TransactionalEmails\Requests\GetTransacEmailsListRequest;
use Brevo\TransactionalEmails\Types\GetTransacEmailsListResponse;
use Brevo\TransactionalEmails\Types\GetTransacEmailContentResponse;
use Brevo\TransactionalEmails\Requests\DeleteSmtpLogIdentifierRequest;
use Brevo\TransactionalEmails\Requests\GetAggregatedSmtpReportRequest;
use Brevo\TransactionalEmails\Types\GetAggregatedSmtpReportResponse;
use Brevo\TransactionalEmails\Requests\GetEmailEventReportRequest;
use Brevo\TransactionalEmails\Types\GetEmailEventReportResponse;
use Brevo\TransactionalEmails\Requests\GetSmtpReportRequest;
use Brevo\TransactionalEmails\Types\GetSmtpReportResponse;
use Brevo\TransactionalEmails\Types\PostPreviewSmtpEmailTemplatesResponse;
use Brevo\TransactionalEmails\Requests\GetSmtpTemplatesRequest;
use Brevo\TransactionalEmails\Types\GetSmtpTemplatesResponse;
use Brevo\TransactionalEmails\Requests\CreateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Types\CreateSmtpTemplateResponse;
use Brevo\Types\GetSmtpTemplateOverview;
use Brevo\TransactionalEmails\Requests\UpdateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Requests\SendTestTemplateRequest;

class TransactionalEmailsClient implements TransactionalEmailsClientInterface
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
     * Retrieve a paginated list of transactional contacts that have been blocked or unsubscribed, along with the reason for blocking (e.g. hard bounce, admin blocked, spam complaint, or unsubscription via email/API/Marketing Automation). Both `startDate` and `endDate` must be provided together when filtering by date range, and neither date can be in the future. Results default to 50 per page (max 100) and are sorted in descending order of record creation unless overridden with the `sort` parameter.
     *
     * @param GetTransacBlockedContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacBlockedContactsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTransacBlockedContacts(GetTransacBlockedContactsRequest $request = new GetTransacBlockedContactsRequest(), ?array $options = null): ?GetTransacBlockedContactsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->senders != null) {
            $query['senders'] = $request->senders;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/blockedContacts",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetTransacBlockedContactsResponse::fromJson($json);
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
     * Unblock or resubscribe a transactional contact by removing their email address from the blacklist. The email address must be URL-encoded in the path parameter and must be a valid email format. If the contact is not found in the blocklist, a 404 error is returned.
     *
     * @param string $email contact email (urlencoded) to unblock.
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
    public function unblockOrResubscribeATransactionalContact(string $email, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/blockedContacts/{$email}",
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

    /**
     * Get the list of blocked domains
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetBlockedDomainsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getBlockedDomains(?array $options = null): ?GetBlockedDomainsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/blockedDomains",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetBlockedDomainsResponse::fromJson($json);
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
     * Blocks a new domain in order to avoid messages being sent to the same
     *
     * @param BlockNewDomainRequest $request
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
    public function blockNewDomain(BlockNewDomainRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/blockedDomains",
                    method: HttpMethod::POST,
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
     * Unblocks an existing domain from the list of blocked domains
     *
     * @param string $domain The name of the domain to be deleted
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
    public function deleteBlockedDomain(string $domain, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/blockedDomains/{$domain}",
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

    /**
     * Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)
     *
     * @param DeleteHardbouncesRequest $request
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
    public function deleteHardbounces(DeleteHardbouncesRequest $request = new DeleteHardbouncesRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/deleteHardbounces",
                    method: HttpMethod::POST,
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
     * Send a transactional email to one or more recipients, either using inline HTML content or a pre-built template via `templateId`. You can schedule emails for future delivery using `scheduledAt` (UTC, up to 5-minute delay), send multiple personalized versions with `messageVersions` (max 2000 total recipients, 99 per version), and attach files via URL or base64-encoded content. A `sender` and `subject` are required when no `templateId` is provided; when a `templateId` is used, the template''s sender and subject are applied unless overridden.
     *
     * @param SendTransacEmailRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SendTransacEmailResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendTransacEmail(SendTransacEmailRequest $request = new SendTransacEmailRequest(), ?array $options = null): ?SendTransacEmailResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/email",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SendTransacEmailResponse::fromJson($json);
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
     * Delete scheduled batch of emails by batchId or single scheduled email by messageId
     *
     * @param string $identifier The `batchId` of scheduled emails batch (must be a valid UUIDv4) or the `messageId` of scheduled email (enclosed in angle brackets with @ sign, e.g. `<...@domain>`).
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
    public function deleteScheduledEmailById(string $identifier, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/email/{$identifier}",
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

    /**
     * Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)
     *
     * @param string $identifier The `batchId` of scheduled emails batch (must be a valid UUIDv4) or the `messageId` of scheduled email (enclosed in angle brackets with @ sign, e.g. `<...@domain>`). When using `messageId`, the `limit`, `offset`, `sort`, and `status` query parameters are ignored.
     * @param GetScheduledEmailByIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return (
     *    GetScheduledEmailByIdResponseBatches
     *   |GetScheduledEmailByIdResponseCreatedAt
     * )|null
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getScheduledEmailById(string $identifier, GetScheduledEmailByIdRequest $request = new GetScheduledEmailByIdRequest(), ?array $options = null): GetScheduledEmailByIdResponseBatches|GetScheduledEmailByIdResponseCreatedAt|null
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->startDate != null) {
            $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
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
                    path: "smtp/emailStatus/{$identifier}",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeUnion($json, new Union(GetScheduledEmailByIdResponseBatches::class, GetScheduledEmailByIdResponseCreatedAt::class)); // @phpstan-ignore-line
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
     * This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.
     *
     * @param GetTransacEmailsListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacEmailsListResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTransacEmailsList(GetTransacEmailsListRequest $request = new GetTransacEmailsListRequest(), ?array $options = null): ?GetTransacEmailsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->email != null) {
            $query['email'] = $request->email;
        }
        if ($request->templateId != null) {
            $query['templateId'] = $request->templateId;
        }
        if ($request->messageId != null) {
            $query['messageId'] = $request->messageId;
        }
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
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
                    path: "smtp/emails",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetTransacEmailsListResponse::fromJson($json);
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
     * <Note title="How to get uuid">You can get the uuid using either of the following methods:
     * Send a GET request to https://api.brevo.com/v3/smtp/emails and pass the message_id in the url. Use your api-key to authenticate the request and you will get your uuid as a response.
     * The uuid can also be fetched from the transactional logs page in your Brevo account, from the address URL.</Note>
     *
     * @param string $uuid Unique id of the transactional email that has been sent to a particular contact
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacEmailContentResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTransacEmailContent(string $uuid, ?array $options = null): ?GetTransacEmailContentResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/emails/{$uuid}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetTransacEmailContentResponse::fromJson($json);
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
     * Delete SMTP transactional log entries identified by a message ID (enclosed in angle brackets with an @ sign) or a valid email address. Optionally narrow the deletion to a specific date range using `from_date` and `to_date` query parameters (YYYY-MM-DD format). The operation also removes any associated stored email preview content.
     *
     * @param string $identifier MessageId or email address of the transactional log(s) to delete. Must be a valid message ID (enclosed in angle brackets with @ sign) or a valid email address.
     * @param DeleteSmtpLogIdentifierRequest $request
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
    public function deleteAnSmtpTransactionalLog(string $identifier, DeleteSmtpLogIdentifierRequest $request = new DeleteSmtpLogIdentifierRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->fromDate != null) {
            $query['from_date'] = $request->fromDate;
        }
        if ($request->toDate != null) {
            $query['to_date'] = $request->toDate;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/log/{$identifier}",
                    method: HttpMethod::DELETE,
                    query: $query,
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
     * This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
     *
     * @param GetAggregatedSmtpReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAggregatedSmtpReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAggregatedSmtpReport(GetAggregatedSmtpReportRequest $request = new GetAggregatedSmtpReportRequest(), ?array $options = null): ?GetAggregatedSmtpReportResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->days != null) {
            $query['days'] = $request->days;
        }
        if ($request->tag != null) {
            $query['tag'] = $request->tag;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/statistics/aggregatedReport",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetAggregatedSmtpReportResponse::fromJson($json);
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
     * This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
     *
     * @param GetEmailEventReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEmailEventReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getEmailEventReport(GetEmailEventReportRequest $request = new GetEmailEventReportRequest(), ?array $options = null): ?GetEmailEventReportResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->days != null) {
            $query['days'] = $request->days;
        }
        if ($request->email != null) {
            $query['email'] = $request->email;
        }
        if ($request->event != null) {
            $query['event'] = $request->event;
        }
        if ($request->tags != null) {
            $query['tags'] = $request->tags;
        }
        if ($request->messageId != null) {
            $query['messageId'] = $request->messageId;
        }
        if ($request->templateId != null) {
            $query['templateId'] = $request->templateId;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/statistics/events",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEmailEventReportResponse::fromJson($json);
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
     * This endpoint will show the aggregated stats per day for the past 10 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 30 days.
     *
     * @param GetSmtpReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSmtpReport(GetSmtpReportRequest $request = new GetSmtpReportRequest(), ?array $options = null): ?GetSmtpReportResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->days != null) {
            $query['days'] = $request->days;
        }
        if ($request->tag != null) {
            $query['tag'] = $request->tag;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/statistics/reports",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSmtpReportResponse::fromJson($json);
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
     * Generate a fully rendered preview of a transactional email template by resolving dynamic variables. Provide either an `email` address (to populate variables from the contact''s attributes) or a `params` object with key-value pairs for manual substitution; at least one of these is required alongside the mandatory `templateId`. The response includes the rendered HTML, subject, sender details, preview text, and any feed names used in the template.
     *
     * @param (
     *    mixed
     * ) $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostPreviewSmtpEmailTemplatesResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function postPreviewSmtpEmailTemplates(mixed $request, ?array $options = null): ?PostPreviewSmtpEmailTemplatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/template/preview",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostPreviewSmtpEmailTemplatesResponse::fromJson($json);
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
     * Retrieve a paginated list of all transactional email templates (including automation templates) with their details such as name, subject, sender, status, HTML content, and timestamps. Results default to 50 per page (max 1000) and are sorted in descending creation order unless overridden. You can filter by active/inactive status using `templateStatus` and by editor type using `editorType` (currently only `richTextEditor` is supported).
     *
     * @param GetSmtpTemplatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpTemplatesResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSmtpTemplates(GetSmtpTemplatesRequest $request = new GetSmtpTemplatesRequest(), ?array $options = null): ?GetSmtpTemplatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->templateStatus != null) {
            $query['templateStatus'] = $request->templateStatus;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->editorType != null) {
            $query['editorType'] = $request->editorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSmtpTemplatesResponse::fromJson($json);
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
     * Create a new transactional email template with the specified sender, subject, and content. The `sender`, `subject`, and `templateName` fields are required. Template content can be provided via `htmlContent` (minimum 10 characters) or `htmlUrl`; at least one must be supplied. Templates are created as inactive by default unless `isActive` is explicitly set to `true`.
     *
     * @param CreateSmtpTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateSmtpTemplateResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createSmtpTemplate(CreateSmtpTemplateRequest $request, ?array $options = null): ?CreateSmtpTemplateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CreateSmtpTemplateResponse::fromJson($json);
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
     * Retrieve the full details of a specific transactional email template by its numeric ID or custom template identifier string. The response includes the template name, subject, sender information, HTML content, active status, creation and modification timestamps, reply-to address, tag, and a `doiTemplate` flag indicating whether the template is a double opt-in template (detected by the presence of optin-related tags or variables in the content).
     *
     * @param (
     *    int
     *   |string
     * ) $templateId ID of the template. Can be a numeric template ID or a custom template identifier string (alphanumeric, hyphens, and underscores only, max 64 characters, must start with a letter).
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpTemplateOverview
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSmtpTemplate(int|string $templateId, ?array $options = null): ?GetSmtpTemplateOverview
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates/{$templateId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSmtpTemplateOverview::fromJson($json);
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
     * Update an existing transactional email template by its numeric ID or custom template identifier string. All fields in the request body are optional; only the provided fields will be updated. You can update the template name, subject, sender, reply-to address, HTML content (via `htmlContent` or `htmlUrl`), active status, tag, attachment URL, and the personalized `toField`. Only one of sender email or sender ID should be provided per request.
     *
     * @param (
     *    int
     *   |string
     * ) $templateId ID of the template. Can be a numeric template ID or a custom template identifier string.
     * @param UpdateSmtpTemplateRequest $request
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
    public function updateSmtpTemplate(int|string $templateId, UpdateSmtpTemplateRequest $request = new UpdateSmtpTemplateRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates/{$templateId}",
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
     * Permanently delete a transactional email template by its numeric ID. Only inactive templates can be deleted; attempting to delete an active template returns a 405 error. To deactivate a template before deletion, use `PUT /smtp/templates/{templateId}` with `isActive` set to `false`. Deletion also removes associated newsletter template data and triggers asynchronous cleanup of shared assets.
     *
     * @param int $templateId id of the template
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
    public function deleteSmtpTemplate(int $templateId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates/{$templateId}",
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

    /**
     * Send a test email of the specified transactional template to one or more recipients. Provide an array of email addresses in the `emailTo` field; if left empty, the test mail is sent to your entire test list. You can send a maximum of 50 test emails per day, and all provided email addresses must be valid.
     *
     * @param int $templateId Id of the template
     * @param SendTestTemplateRequest $request
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
    public function sendTestTemplate(int $templateId, SendTestTemplateRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "smtp/templates/{$templateId}/sendTest",
                    method: HttpMethod::POST,
                    body: $request->body,
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
