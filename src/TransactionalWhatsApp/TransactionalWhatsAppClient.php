<?php

namespace Brevo\TransactionalWhatsApp;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageRequestParams;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageRequestText;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use Brevo\Core\Json\JsonSerializer;
use Brevo\Core\Types\Union;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\TransactionalWhatsApp\Requests\GetWhatsappEventReportRequest;
use Brevo\TransactionalWhatsApp\Types\GetWhatsappEventReportResponse;

class TransactionalWhatsAppClient implements TransactionalWhatsAppClientInterface
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
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below. [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     * This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)
     *
     * @param (
     *    SendWhatsappMessageRequestParams
     *   |SendWhatsappMessageRequestText
     * ) $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SendWhatsappMessageResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendWhatsappMessage(SendWhatsappMessageRequestParams|SendWhatsappMessageRequestText $request, ?array $options = null): SendWhatsappMessageResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "whatsapp/sendMessage",
                    method: HttpMethod::POST,
                    body: JsonSerializer::serializeUnion($request, new Union(SendWhatsappMessageRequestParams::class, SendWhatsappMessageRequestText::class)),
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return SendWhatsappMessageResponse::fromJson($json);
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
     * This endpoint will show the unaggregated statistics for WhatsApp activity (30 days by default if `startDate` and `endDate` or `days` is not passed. The date range can not exceed 90 days)
     *
     * @param GetWhatsappEventReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWhatsappEventReportResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getWhatsappEventReport(GetWhatsappEventReportRequest $request = new GetWhatsappEventReportRequest(), ?array $options = null): GetWhatsappEventReportResponse
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
        if ($request->contactNumber != null) {
            $query['contactNumber'] = $request->contactNumber;
        }
        if ($request->event != null) {
            $query['event'] = $request->event;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "whatsapp/statistics/events",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWhatsappEventReportResponse::fromJson($json);
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
