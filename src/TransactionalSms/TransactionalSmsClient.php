<?php

namespace Brevo\TransactionalSms;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Types\SendTransacSms;
use Brevo\TransactionalSms\Types\SendAsyncTransactionalSmsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\TransactionalSms\Types\SendTransacSmsResponse;
use Brevo\TransactionalSms\Requests\GetTransacAggregatedSmsReportRequest;
use Brevo\TransactionalSms\Types\GetTransacAggregatedSmsReportResponse;
use Brevo\TransactionalSms\Requests\GetSmsEventsRequest;
use Brevo\TransactionalSms\Types\GetSmsEventsResponse;
use Brevo\TransactionalSms\Requests\GetTransacSmsReportRequest;
use Brevo\TransactionalSms\Types\GetTransacSmsReportResponse;

class TransactionalSmsClient implements TransactionalSmsClientInterface
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
     * <Note>If the user includes stop code in the Transactional SMS, then it will be switched to Marketing SMS automatically and it will be interpreted as a Marketing SMS. To send Transactional SMS as Transactional, it is important not to use stop code.
     * Note: For adding a stop code, client has to add reply STOP to [STOP_CODE] and the [STOP_CODE] will be replaced with the number.</Note>
     * <Note title="For end users in France">Transactional SMS can be sent at any time without time restrictions. However, if a message is categorized as Marketing, it must adhere to specific time restrictions. Messages sent outside of these restricted hours will experience delays and will be processed during allowable times. Specifically, Marketing SMS cannot be processed between 10pm and 8am, on Sundays, and on French public holidays.</Note>
     *
     * @param SendTransacSms $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SendAsyncTransactionalSmsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendAsyncTransactionalSms(SendTransacSms $request, ?array $options = null): ?SendAsyncTransactionalSmsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "transactionalSMS/send",
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
                return SendAsyncTransactionalSmsResponse::fromJson($json);
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
     * Send a transactional SMS message to a single mobile number. The `sender`, `recipient`, and either `content` or `templateId` fields are required. The sender name is limited to 11 alphanumeric characters or 15 numeric characters, and the recipient must be a valid international phone number (6-15 digits, optional leading +). Tags can be a string or an array of up to 10 strings. The SMS type defaults to `transactional` but can be set to `marketing`; if the content includes a stop code, it is automatically treated as marketing. Returns the message ID, SMS count, credits used, and remaining credits.
     *
     * @param SendTransacSms $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SendTransacSmsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendTransacSms(SendTransacSms $request, ?array $options = null): ?SendTransacSmsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "transactionalSMS/sms",
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
                return SendTransacSmsResponse::fromJson($json);
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
     * Retrieve an aggregated report of your transactional SMS activity over a specified time period, including counts for requests, delivered, hard bounces, soft bounces, blocked, unsubscribed, replied, accepted, rejected, and skipped messages. Filter by date range using `startDate` and `endDate` (both required together, YYYY-MM-DD format) or by a number of past `days` (not compatible with date range). You can further narrow results by `tag`. If no date filter is provided, the report covers all available data and returns the auto-detected date range.
     *
     * @param GetTransacAggregatedSmsReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacAggregatedSmsReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTransacAggregatedSmsReport(GetTransacAggregatedSmsReportRequest $request = new GetTransacAggregatedSmsReportRequest(), ?array $options = null): ?GetTransacAggregatedSmsReportResponse
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
                    path: "transactionalSMS/statistics/aggregatedReport",
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
                return GetTransacAggregatedSmsReportResponse::fromJson($json);
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
     * Retrieve a paginated list of individual SMS event records (unaggregated), including event type, phone number, message ID, timestamp, tag, and reason or reply content where applicable. Results default to 50 per page (max 100) and are sorted in descending order unless overridden. Filter by date range (`startDate`/`endDate`), past `days` (not compatible with date range), specific `event` type (e.g. delivered, bounces, replies), `phoneNumber`, or `tags`. Bounce events include the failure reason, and reply events include the reply content.
     *
     * @param GetSmsEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmsEventsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSmsEvents(GetSmsEventsRequest $request = new GetSmsEventsRequest(), ?array $options = null): ?GetSmsEventsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->days != null) {
            $query['days'] = $request->days;
        }
        if ($request->phoneNumber != null) {
            $query['phoneNumber'] = $request->phoneNumber;
        }
        if ($request->event != null) {
            $query['event'] = $request->event;
        }
        if ($request->tags != null) {
            $query['tags'] = $request->tags;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "transactionalSMS/statistics/events",
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
                return GetSmsEventsResponse::fromJson($json);
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
     * Retrieve a day-by-day breakdown of your transactional SMS activity, with each entry containing the date and counts for requests, delivered, hard bounces, soft bounces, blocked, unsubscribed, replied, accepted, rejected, and skipped messages. Filter by date range using `startDate` and `endDate` (both required together, YYYY-MM-DD format), by a number of past `days` (not compatible with date range), or by `tag`. Results are sorted in descending order by default unless overridden with the `sort` parameter.
     *
     * @param GetTransacSmsReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacSmsReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTransacSmsReport(GetTransacSmsReportRequest $request = new GetTransacSmsReportRequest(), ?array $options = null): ?GetTransacSmsReportResponse
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
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "transactionalSMS/statistics/reports",
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
                return GetTransacSmsReportResponse::fromJson($json);
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
