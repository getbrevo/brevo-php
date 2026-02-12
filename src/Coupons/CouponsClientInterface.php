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
     * @param GetCouponCollectionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCouponCollection
     */
    public function getCouponCollections(GetCouponCollectionsRequest $request = new GetCouponCollectionsRequest(), ?array $options = null): GetCouponCollection;

    /**
     * @param CreateCouponCollectionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateCouponCollectionResponse
     */
    public function createCouponCollection(CreateCouponCollectionRequest $request, ?array $options = null): CreateCouponCollectionResponse;

    /**
     * @param string $id Id of the collection to return
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCouponCollection
     */
    public function getCouponCollection(string $id, ?array $options = null): GetCouponCollection;

    /**
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
     * @return UpdateCouponCollectionResponse
     */
    public function updateCouponCollection(string $id, UpdateCouponCollectionRequest $request = new UpdateCouponCollectionRequest(), ?array $options = null): UpdateCouponCollectionResponse;

    /**
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
