<?php

namespace Brevo\InboundParsing;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\InboundParsing\Requests\GetInboundEmailEventsRequest;
use Brevo\InboundParsing\Types\GetInboundEmailEventsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\InboundParsing\Types\GetInboundEmailEventsByUuidResponse;

class InboundParsingClient implements InboundParsingClientInterface
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
     * This endpoint will show the list of all the events for the received emails.
     *
     * @param GetInboundEmailEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetInboundEmailEventsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getInboundEmailEvents(GetInboundEmailEventsRequest $request = new GetInboundEmailEventsRequest(), ?array $options = null): GetInboundEmailEventsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->sender != null) {
            $query['sender'] = $request->sender;
        }
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
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "inbound/events",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetInboundEmailEventsResponse::fromJson($json);
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
     * This endpoint will show the list of all events history for one particular received email.
     *
     * @param string $uuid UUID to fetch events specific to received email
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetInboundEmailEventsByUuidResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getInboundEmailEventsByUuid(string $uuid, ?array $options = null): GetInboundEmailEventsByUuidResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "inbound/events/{$uuid}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetInboundEmailEventsByUuidResponse::fromJson($json);
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
     * This endpoint will retrieve inbound attachment with download token.
     *
     * @param string $downloadToken Token to fetch a particular attachment
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getInboundEmailAttachment(string $downloadToken, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "inbound/attachments/{$downloadToken}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
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
