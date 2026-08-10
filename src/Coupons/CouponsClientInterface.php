<?php

namespace Brevo\Coupons;

use Brevo\Coupons\Requests\GetCouponCollectionsRequest;
use Brevo\Types\GetCouponCollection;
use Brevo\Coupons\Requests\CreateCouponCollectionRequest;
use Brevo\Coupons\Types\CreateCouponCollectionResponse;
use Brevo\Coupons\Requests\UpdateCouponCollectionRequest;
use Brevo\Coupons\Types\UpdateCouponCollectionResponse;
use Brevo\Coupons\Requests\CreateCouponsRequest;

interface CouponsClientInterface
{
    /**
     * Retrieve a paginated list of all coupon collections in your Brevo account. Results can be sorted by creation date, remaining coupons count, or expiration date, in ascending or descending order. Pagination defaults to 50 collections per page (maximum 100).
     *
     * Example:
     * ```php
     * $client->coupons->getCouponCollections(
     *     new GetCouponCollectionsRequest([]),
     * );
     * ```
     *
     * @param GetCouponCollectionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCouponCollection
     */
    public function getCouponCollections(GetCouponCollectionsRequest $request = new GetCouponCollectionsRequest(), ?array $options = null): ?GetCouponCollection;

    /**
     * Create a new coupon collection with a name and a default coupon value. You can optionally set an expiration date in RFC3339 format and configure alert thresholds to receive email notifications when remaining coupons or remaining days before expiration fall below a specified number. The collection ID is auto-generated as a UUID and returned in the response.
     *
     * Example:
     * ```php
     * $client->coupons->createCouponCollection(
     *     new CreateCouponCollectionRequest([
     *         'defaultCoupon' => 'Winter',
     *         'name' => '10%OFF',
     *     ]),
     * );
     * ```
     *
     * @param CreateCouponCollectionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateCouponCollectionResponse
     */
    public function createCouponCollection(CreateCouponCollectionRequest $request, ?array $options = null): ?CreateCouponCollectionResponse;

    /**
     * Retrieve the details of a single coupon collection by its UUID. The response includes the collection name, default coupon value, total and remaining coupon counts, and creation timestamp. Returns a `404` error if no collection matches the provided ID.
     *
     * Example:
     * ```php
     * $client->coupons->getCouponCollection(
     *     'id',
     * );
     * ```
     *
     * @param string $id Id of the collection to return
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCouponCollection
     */
    public function getCouponCollection(string $id, ?array $options = null): ?GetCouponCollection;

    /**
     * Update an existing coupon collection by its UUID. You can modify the default coupon value, set or remove the expiration date (pass `null` to remove), and configure or disable alert thresholds for remaining coupons or remaining days. Only the fields included in the request body are updated; omitted fields remain unchanged.
     *
     * Example:
     * ```php
     * $client->coupons->updateCouponCollection(
     *     'id',
     *     new UpdateCouponCollectionRequest([]),
     * );
     * ```
     *
     * @param string $id Id of the collection to update
     * @param UpdateCouponCollectionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpdateCouponCollectionResponse
     */
    public function updateCouponCollection(string $id, UpdateCouponCollectionRequest $request = new UpdateCouponCollectionRequest(), ?array $options = null): ?UpdateCouponCollectionResponse;

    /**
     * Add coupons to an existing coupon collection. The `coupons` array must contain between 1 and 10,000 unique coupon code strings, all associated with the specified `collectionId`. Coupon creation is processed asynchronously and a `204` status is returned immediately upon acceptance. Returns a `404` error if the specified coupon collection does not exist.
     *
     * Example:
     * ```php
     * $client->coupons->createCoupons(
     *     new CreateCouponsRequest([
     *         'collectionId' => '23befbae-1505-47a8-bd27-e30ef739f32c',
     *         'coupons' => [
     *             'Uf12AF',
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param CreateCouponsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createCoupons(CreateCouponsRequest $request, ?array $options = null): void;
}
