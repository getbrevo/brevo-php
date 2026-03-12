<?php

namespace Brevo\CustomObjects;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\CustomObjects\Requests\UpsertrecordsRequest;
use Brevo\CustomObjects\Types\UpsertrecordsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\CustomObjects\Requests\GetrecordsRequest;
use Brevo\CustomObjects\Types\GetrecordsResponse;
use Brevo\CustomObjects\Requests\BatchDeleteObjectRecordsRequest;
use Brevo\CustomObjects\Types\BatchDeleteObjectRecordsResponse;

class CustomObjectsClient implements CustomObjectsClientInterface
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
     * <Note title="Enterprise access only">
     * Custom objects are only available to Enterprise plans.
     *
     * This feature is in beta. These are subject to change.
     * </Note>
     *
     * This API allows bulk upsert of object records in a single request. Each object record may include
     *   - Attributes
     *   - Identifiers
     *   - Associations
     * **Response:**
     *   The API processes the request asynchronously and returns a processId that you can use to track the background process status.
     * **API and Schema Limitation:**
     *   - Size:
     *       - Max 1000 objects records per request
     *       - Max request body size: 1 MB
     *   - Max 500 attributes defined per object record upsert request
     *     - This is coherent with schema limitation: an object cannot have more than 500 attributes.
     *     - Worth noting: Nothing happens If an attribute is mentioned in the request, but was not previously defined for the object schema (no error, no attribute creation)
     *   - Max 10 associations defined per object record upsert request
     *     - This is coherent with schema limitation: an object cannot have more than 10 associations with other objects. and each object record can be linked to max 10 other records.
     * **Errors:**
     *     - Make sure both object records exist before associating them, else the API will return an error.
     *     - This route does not create objects. The object where the object records are upserted by this API must be created already else the API will return an error "invalid object type".
     *
     * @param string $objectType object type for the attribute
     * @param UpsertrecordsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return UpsertrecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function upsertrecords(string $objectType, UpsertrecordsRequest $request, ?array $options = null): UpsertrecordsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "objects/{$objectType}/batch/upsert",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return UpsertrecordsResponse::fromJson($json);
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
     * <Note title="Enterprise access only">
     * Custom objects are only available to Enterprise plans.
     *
     * This feature is in beta. These are subject to change.
     * </Note>
     *
     * This API retrieves a list of object records along with their associated records and provides the total count of records for the specified object. **Note**: Contact as object type is not supported in this endpoint.
     *
     * @param string $objectType object type for the attribute
     * @param GetrecordsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetrecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getrecords(string $objectType, GetrecordsRequest $request, ?array $options = null): GetrecordsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['limit'] = $request->limit;
        $query['page_num'] = $request->pageNum;
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->association != null) {
            $query['association'] = $request->association;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "objects/{$objectType}/records",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetrecordsResponse::fromJson($json);
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
     * Use this endpoint to delete multiple object records of the same object-type in one request.
     * The request is accepted and processed asynchronously.   You can track the status of the deletion process using the returned **processId**.
     * **API and Schema Limitations:** - Each request can contain up to **1000** object record identifiers   - If more records must be deleted → send multiple batch requests
     *
     * @param string $objectType Object type for the records to delete
     * @param BatchDeleteObjectRecordsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return BatchDeleteObjectRecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function batchDeleteObjectRecords(string $objectType, BatchDeleteObjectRecordsRequest $request = new BatchDeleteObjectRecordsRequest(), ?array $options = null): BatchDeleteObjectRecordsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "objects/{$objectType}/batch/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return BatchDeleteObjectRecordsResponse::fromJson($json);
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
