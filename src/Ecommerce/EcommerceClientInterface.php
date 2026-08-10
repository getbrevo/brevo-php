<?php

namespace Brevo\Ecommerce;

use Brevo\Ecommerce\Requests\GetCategoriesRequest;
use Brevo\Ecommerce\Types\GetCategoriesResponse;
use Brevo\Ecommerce\Requests\CreateUpdateCategoryRequest;
use Brevo\Ecommerce\Types\CreateUpdateCategoryResponse;
use Brevo\Ecommerce\Requests\CreateUpdateBatchCategoryRequest;
use Brevo\Ecommerce\Types\CreateUpdateBatchCategoryResponse;
use Brevo\Types\GetCategoryDetails;
use Brevo\Ecommerce\Requests\GetEcommerceAttributionMetricsRequest;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsResponse;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse;
use Brevo\Ecommerce\Types\GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Types\GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse;
use Brevo\Ecommerce\Types\GetEcommerceConfigDisplayCurrencyResponse;
use Brevo\Ecommerce\Requests\SetConfigDisplayCurrencyRequest;
use Brevo\Ecommerce\Types\SetConfigDisplayCurrencyResponse;
use Brevo\Ecommerce\Requests\GetOrdersRequest;
use Brevo\Types\Order;
use Brevo\Ecommerce\Requests\CreateBatchOrderRequest;
use Brevo\Ecommerce\Types\CreateBatchOrderResponse;
use Brevo\Ecommerce\Requests\GetProductsRequest;
use Brevo\Ecommerce\Types\GetProductsResponse;
use Brevo\Ecommerce\Requests\CreateUpdateProductRequest;
use Brevo\Ecommerce\Types\CreateUpdateProductResponse;
use Brevo\Ecommerce\Requests\CreateUpdateBatchProductsRequest;
use Brevo\Ecommerce\Types\CreateUpdateBatchProductsResponse;
use Brevo\Types\GetProductDetails;
use Brevo\Ecommerce\Requests\CreateProductAlertRequest;

interface EcommerceClientInterface
{
    /**
     * Retrieve a paginated list of all ecommerce categories stored in your Brevo account. Results are sorted by creation date in descending order by default, and can be filtered by category IDs, name, modification date, creation date, or deletion status. The response includes a `count` field with the total number of matching categories, and pagination defaults to 50 categories per page (maximum 100).
     *
     * Example:
     * ```php
     * $client->ecommerce->getCategories(
     *     new GetCategoriesRequest([]),
     * );
     * ```
     *
     * @param GetCategoriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCategoriesResponse
     */
    public function getCategories(GetCategoriesRequest $request = new GetCategoriesRequest(), ?array $options = null): ?GetCategoriesResponse;

    /**
     * Create a new ecommerce category or update an existing one, identified by the mandatory `id` field. When `updateEnabled` is set to `false` (the default), the endpoint performs an insert and returns `201`; if the category ID already exists, a `400` error is returned. When `updateEnabled` is `true`, the endpoint performs an upsert, returning `201` for a new category or `204` when an existing category is updated. The `name` field is mandatory for creation but optional for updates.
     *
     * Example:
     * ```php
     * $client->ecommerce->createUpdateCategory(
     *     new CreateUpdateCategoryRequest([
     *         'id' => 'CAT123',
     *     ]),
     * );
     * ```
     *
     * @param CreateUpdateCategoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateUpdateCategoryResponse
     */
    public function createUpdateCategory(CreateUpdateCategoryRequest $request, ?array $options = null): ?CreateUpdateCategoryResponse;

    /**
     * Create or update multiple ecommerce categories in a single request. The `categories` array accepts up to 100 category objects, each requiring a unique `id`. When `updateEnabled` is `false` (the default), all categories are inserted as new; if any ID already exists, a `400` error is returned. When `updateEnabled` is `true`, existing categories are updated and new ones are created via upsert. Duplicate IDs within the same request payload are rejected. The response returns the count of created and updated categories.
     *
     * Example:
     * ```php
     * $client->ecommerce->createUpdateBatchCategory(
     *     new CreateUpdateBatchCategoryRequest([
     *         'categories' => [
     *             new CreateUpdateBatchCategoryRequestCategoriesItem([
     *                 'id' => 'CAT123',
     *             ]),
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param CreateUpdateBatchCategoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateUpdateBatchCategoryResponse
     */
    public function createUpdateBatchCategory(CreateUpdateBatchCategoryRequest $request, ?array $options = null): ?CreateUpdateBatchCategoryResponse;

    /**
     * Retrieve the full details of a single ecommerce category by its unique ID. The response includes the category name, URL, creation and modification timestamps, and deletion status. Returns a `404` error if no category matches the provided ID.
     *
     * Example:
     * ```php
     * $client->ecommerce->getCategoryInfo(
     *     'id',
     * );
     * ```
     *
     * @param string $id Category ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCategoryDetails
     */
    public function getCategoryInfo(string $id, ?array $options = null): ?GetCategoryDetails;

    /**
     * Getting access to Brevo eCommerce.
     *
     * Example:
     * ```php
     * $client->ecommerce->activateTheECommerceApp();
     * ```
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function activateTheECommerceApp(?array $options = null): void;

    /**
     * Retrieve aggregated ecommerce attribution metrics for one or more Brevo email campaigns, SMS campaigns, or automation workflows. You can optionally filter by a date range using `periodFrom` and `periodTo` in RFC3339 format. The response includes per-source metrics (orders count, revenue, and average basket) as well as aggregated totals across all requested sources.
     *
     * Example:
     * ```php
     * $client->ecommerce->getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(
     *     new GetEcommerceAttributionMetricsRequest([
     *         'periodFrom' => new DateTime('2022-01-02T00:00:00Z'),
     *         'periodTo' => new DateTime('2022-01-03T00:00:00Z'),
     *         'emailCampaignIdArray' => [
     *             'sale',
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param GetEcommerceAttributionMetricsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEcommerceAttributionMetricsResponse
     */
    public function getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(GetEcommerceAttributionMetricsRequest $request = new GetEcommerceAttributionMetricsRequest(), ?array $options = null): ?GetEcommerceAttributionMetricsResponse;

    /**
     * Retrieve detailed attribution metrics for a single Brevo campaign or automation workflow, identified by its conversion source type and ID. The response includes orders count, revenue, average basket value, and the number of new customers attributed to that specific campaign or workflow.
     *
     * Example:
     * ```php
     * $client->ecommerce->getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(
     *     GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
     *     'sale',
     * );
     * ```
     *
     * @param value-of<GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource> $conversionSource The Brevo campaign type or workflow type for which data will be retrieved
     * @param string $conversionSourceId The Brevo campaign or automation workflow id for which data will be retrieved
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse
     */
    public function getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): ?GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse;

    /**
     * Retrieve the list of products whose sales have been attributed to a specific Brevo campaign or automation workflow. Each product entry includes its ID, name, SKU, image URL, product URL, price, revenue, and orders count. The conversion source type must be one of `email_campaign`, `sms_campaign`, `automation_workflow_email`, or `automation_workflow_sms`.
     *
     * Example:
     * ```php
     * $client->ecommerce->getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(
     *     GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
     *     'sale',
     * );
     * ```
     *
     * @param value-of<GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource> $conversionSource The Brevo campaign or automation workflow type for which data will be retrieved
     * @param string $conversionSourceId The Brevo campaign or automation workflow id for which data will be retrieved
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse
     */
    public function getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): ?GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse;

    /**
     * Retrieve the ISO 4217 display currency code currently configured for your Brevo ecommerce account. This currency is used to display monetary values across the ecommerce dashboard and reports. Returns a `403` error if ecommerce is not activated on the account.
     *
     * Example:
     * ```php
     * $client->ecommerce->getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount();
     * ```
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEcommerceConfigDisplayCurrencyResponse
     */
    public function getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount(?array $options = null): ?GetEcommerceConfigDisplayCurrencyResponse;

    /**
     * Set or update the ISO 4217 display currency code for your Brevo ecommerce account. This currency determines how monetary values are displayed in the ecommerce dashboard and reports. The provided currency code must be a valid ISO 4217 code; invalid codes result in a `422` error. Returns a `403` error if ecommerce is not activated on the account.
     *
     * Example:
     * ```php
     * $client->ecommerce->setConfigDisplayCurrency(
     *     new SetConfigDisplayCurrencyRequest([
     *         'code' => 'EUR',
     *     ]),
     * );
     * ```
     *
     * @param SetConfigDisplayCurrencyRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SetConfigDisplayCurrencyResponse
     */
    public function setConfigDisplayCurrency(SetConfigDisplayCurrencyRequest $request, ?array $options = null): ?SetConfigDisplayCurrencyResponse;

    /**
     * Get all the orders
     *
     * Example:
     * ```php
     * $client->ecommerce->getOrders(
     *     new GetOrdersRequest([]),
     * );
     * ```
     *
     * @param GetOrdersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return mixed
     */
    public function getOrders(GetOrdersRequest $request = new GetOrdersRequest(), ?array $options = null): mixed;

    /**
     * Manages the transactional status of the order
     *
     * Example:
     * ```php
     * $client->ecommerce->createOrder(
     *     new Order([
     *         'amount' => 308.42,
     *         'createdAt' => '2021-07-29T20:59:23.383Z',
     *         'id' => '14',
     *         'products' => [
     *             new OrderProductsItem([
     *                 'price' => 99.99,
     *                 'productId' => 'P1',
     *             ]),
     *         ],
     *         'status' => 'completed',
     *         'updatedAt' => '2021-07-30T10:59:23.383Z',
     *     ]),
     * );
     * ```
     *
     * @param Order $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createOrder(Order $request, ?array $options = null): void;

    /**
     * Create multiple orders at one time instead of one order at a time
     *
     * Example:
     * ```php
     * $client->ecommerce->createBatchOrder(
     *     new CreateBatchOrderRequest([
     *         'orders' => [
     *             new Order([
     *                 'amount' => 308.42,
     *                 'createdAt' => '2021-07-29T20:59:23.383Z',
     *                 'id' => '14',
     *                 'products' => [
     *                     new OrderProductsItem([
     *                         'price' => 99.99,
     *                         'productId' => 'P1',
     *                     ]),
     *                 ],
     *                 'status' => 'completed',
     *                 'updatedAt' => '2021-07-30T10:59:23.383Z',
     *             ]),
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param CreateBatchOrderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateBatchOrderResponse
     */
    public function createBatchOrder(CreateBatchOrderRequest $request, ?array $options = null): ?CreateBatchOrderResponse;

    /**
     * Retrieve a paginated list of all ecommerce products stored in your Brevo account. Results are sorted by creation date in descending order by default, and can be filtered by product IDs, name (minimum 3 characters), price range, category IDs, modification date, creation date, or deletion status. Use the `search` parameter to query across SKU, name, and ID simultaneously — results are prioritized as exact SKU match > SKU prefix match > name match > ID match. Pagination defaults to 50 products per page (maximum 1000), and the response includes a `count` field with the total number of matching products.
     *
     * Example:
     * ```php
     * $client->ecommerce->getProducts(
     *     new GetProductsRequest([]),
     * );
     * ```
     *
     * @param GetProductsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetProductsResponse
     */
    public function getProducts(GetProductsRequest $request = new GetProductsRequest(), ?array $options = null): ?GetProductsResponse;

    /**
     * Create a new ecommerce product or update an existing one, identified by the mandatory `id` field. When `updateEnabled` is `false` (the default), the endpoint inserts a new product and returns `201`; if the product ID already exists, a `400` error is returned. When `updateEnabled` is `true`, the endpoint performs an upsert, returning `201` for a new product or `204` for an update. The `name` field is mandatory for creation but optional for updates. Product images are downloaded, validated (max 5 MB, formats: jpeg, jpg, png, bmp, gif, webp), and re-hosted on S3. The `metaInfo` object supports up to 20 keys with a cumulative size limit of approximately 1000 KB.
     *
     * Example:
     * ```php
     * $client->ecommerce->createUpdateProduct(
     *     new CreateUpdateProductRequest([
     *         'id' => 'P11',
     *         'name' => 'Iphone 11',
     *     ]),
     * );
     * ```
     *
     * @param CreateUpdateProductRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateUpdateProductResponse
     */
    public function createUpdateProduct(CreateUpdateProductRequest $request, ?array $options = null): ?CreateUpdateProductResponse;

    /**
     * Create or update multiple ecommerce products in a single request. The `products` array accepts up to 100 product objects for creation (or up to 1000 when `updateEnabled` is `true` and the account has an increased limit). Each product requires a unique `id` and `name` (name is mandatory for creation only). When `updateEnabled` is `false`, all products are inserted as new; if any ID already exists, a `400` error is returned. When `updateEnabled` is `true`, existing products are updated and new ones are created via upsert. Duplicate IDs within the same request payload are rejected. The response returns the count of created and updated products.
     *
     * Example:
     * ```php
     * $client->ecommerce->createUpdateBatchProducts(
     *     new CreateUpdateBatchProductsRequest([
     *         'products' => [
     *             new CreateUpdateBatchProductsRequestProductsItem([
     *                 'id' => 'P11',
     *                 'name' => 'Iphone 11',
     *             ]),
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param CreateUpdateBatchProductsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateUpdateBatchProductsResponse
     */
    public function createUpdateBatchProducts(CreateUpdateBatchProductsRequest $request, ?array $options = null): ?CreateUpdateBatchProductsResponse;

    /**
     * Retrieve the full details of a single ecommerce product by its unique ID. The response includes the product name, price, SKU, URL, image URLs (original and thumbnails), categories, stock level, meta information, creation and modification timestamps, and deletion status. Returns a `404` error if no product matches the provided ID.
     *
     * Example:
     * ```php
     * $client->ecommerce->getProductInfo(
     *     'id',
     * );
     * ```
     *
     * @param string $id Product ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetProductDetails
     */
    public function getProductInfo(string $id, ?array $options = null): ?GetProductDetails;

    /**
     * Register a contact to receive an alert for a specific product event, such as `back_in_stock`. At least one contact identifier (`ext_id`, `email`, or `sms`) must be provided; when multiple are given, priority is `ext_id` > `email` > `sms`. Returns a `404` error if the product ID does not exist, and a `403` error if product alerts are not enabled for the account.
     *
     * Example:
     * ```php
     * $client->ecommerce->createProductAlert(
     *     'id',
     *     'back_in_stock',
     *     new CreateProductAlertRequest([]),
     * );
     * ```
     *
     * @param string $id Product ID
     * @param 'back_in_stock' $type Alert type
     * @param CreateProductAlertRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createProductAlert(string $id, string $type, CreateProductAlertRequest $request = new CreateProductAlertRequest(), ?array $options = null): void;
}
