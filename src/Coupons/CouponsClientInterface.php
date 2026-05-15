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
