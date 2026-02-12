<?php

namespace Brevo\CustomObjects;

use Brevo\CustomObjects\Requests\UpsertrecordsRequest;
use Brevo\CustomObjects\Types\UpsertrecordsResponse;
use Brevo\CustomObjects\Requests\GetrecordsRequest;
use Brevo\CustomObjects\Types\GetrecordsResponse;
use Brevo\CustomObjects\Requests\BatchDeleteObjectRecordsRequest;
use Brevo\CustomObjects\Types\BatchDeleteObjectRecordsResponse;

interface CustomObjectsClientInterface
{
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
     */
    public function upsertrecords(string $objectType, UpsertrecordsRequest $request, ?array $options = null): UpsertrecordsResponse;

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
     */
    public function getrecords(string $objectType, GetrecordsRequest $request, ?array $options = null): GetrecordsResponse;

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
     */
    public function batchDeleteObjectRecords(string $objectType, BatchDeleteObjectRecordsRequest $request = new BatchDeleteObjectRecordsRequest(), ?array $options = null): BatchDeleteObjectRecordsResponse;
}
