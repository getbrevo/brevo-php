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
     * <Note title="Enterprise access only">Custom objects are only available to Enterprise plans.
     * This feature is in beta. These are subject to change.</Note>
     * Performs bulk create or update (upsert) operations for object records in a single asynchronous request. This endpoint is optimized for high-volume data imports and synchronization scenarios.
     *
     * **How Upsert Works:**
     * - **Create**: Omit `identifiers`, or provide only `ext_id` (if it doesn't already exist). A new record is created with a Brevo-generated `id`.
     * - **Update**: Provide `id` (Brevo internal ID) or an `ext_id` that already exists. The matching record is updated with the new attribute values.
     * - **Important:** `id` is for **updates only**. Providing an `id` that does not belong to an existing record will fail during async processing (the HTTP response will still be 202, but the record will be rejected in the background). To create a new record with a stable external reference, use `ext_id` instead.
     *
     * **Request Structure:**
     * Each object record in the `records` array can include:
     * - `identifiers`: Either `id` (internal Brevo ID) or `ext_id` (your external system ID) — required for updates. **Note:** use `id` (singular), not `ids`.
     * - `attributes`: Key-value pairs where each key is the attribute **key** (e.g., `company_name`), not the attribute label (e.g., "Company Name").
     * - `associations`: Controls linking and unlinking of associated records (optional). Each entry specifies:
     *     - `object_type`: The type of the associated object
     *     - `action`: `link` (default) to create the association, or `unlink` to remove it
     *     - `records`: The associated records to link or unlink (each identified by `ext_id` or `id`)
     *     - **Unlink is idempotent** — unlinking a non-existing association is a no-op (no error returned)
     *     - `link` and `unlink` actions can be submitted for the same `object_type` in a single record entry
     *     - Both associated records must already exist before a link can be created
     *
     * > **Common mistake:** Passing the attribute **label** (the display name you see in the UI) instead of the attribute **key** will cause the attribute to be silently ignored and the record may not be created as expected.
     *
     * **Asynchronous Processing:**
     * - Returns immediately with a `processId` (HTTP 202 Accepted)
     * - Use the processId to track status via the Get process API
     *
     * **API and Schema Limitations:**
     * - Max 1000 object records per request
     * - Max request body size: 1 MB
     * - Max 500 attributes per object record (matches the schema limit of 500 attributes per object)
     * - Unknown attribute keys are silently ignored (no error, no attribute creation)
     * - Max 10 association records per associated object-type in each record of the request. If you need more, send multiple requests.
     *
     * **Important Behaviors:**
     * - The object schema must be created before upserting records
     * - Unknown attribute keys are silently ignored (no error, no creation)
     * - Both associated object records must already exist before creating a link association
     * - Unlink operations are idempotent: attempting to unlink a non-existing association returns success
     * - `link` and `unlink` actions can be submitted for the same `object_type` in a single record entry
     * - Contact objects cannot be created via this endpoint
     * - For `category` and `multiple_category` attributes, pass the option **key** as the value (not the option label or option ID).
     * - The `id` identifier (internal Brevo ID) can only be used for **updating** existing records. To create new records, either omit identifiers (Brevo auto-generates an ID) or provide an `ext_id`.
     *
     * **Errors:**
     * - Make sure both object records exist before associating them, else the API will return an error.
     * - This route does not create objects. The object where the object records are upserted by this API must be created already else the API will return an error "invalid object type".
     *
     * @param string $objectType Object type for the records to upsert. Must be a previously created custom object type. Only lowercase alphanumeric characters and underscores are allowed (max 32 characters).
     * @param UpsertrecordsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpsertrecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function upsertrecords(string $objectType, UpsertrecordsRequest $request, ?array $options = null): ?UpsertrecordsResponse
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
                if (empty($json)) {
                    return null;
                }
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
     * <Note title="Enterprise access only">Custom objects are only available to Enterprise plans.
     * This feature is in beta. These are subject to change.</Note>
     * This API retrieves a list of object records along with their associated records and provides the total count of records for the specified object. **Note**: Contact as object type is not supported in this endpoint.
     *
     * @param string $objectType Object type for the records to retrieve. Must be a previously created custom object type. Contact as object type is not supported in this endpoint.
     * @param GetrecordsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetrecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getrecords(string $objectType, GetrecordsRequest $request, ?array $options = null): ?GetrecordsResponse
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
                if (empty($json)) {
                    return null;
                }
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
     * The request is accepted and processed asynchronously. You can track the status of the deletion process using the returned **processId**.
     * **Limitations:** - Each request can contain up to **1000** object record identifiers - Either `ids` or `ext_ids` must be provided, but **not both** in the same request - Deletion of Brevo standard object records is not supported via this endpoint - If more records must be deleted, send multiple batch requests
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
     * @return ?BatchDeleteObjectRecordsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function batchDeleteObjectRecords(string $objectType, BatchDeleteObjectRecordsRequest $request = new BatchDeleteObjectRecordsRequest(), ?array $options = null): ?BatchDeleteObjectRecordsResponse
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
                if (empty($json)) {
                    return null;
                }
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
