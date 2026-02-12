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
     * @param GetCategoriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCategoriesResponse
     */
    public function getCategories(GetCategoriesRequest $request = new GetCategoriesRequest(), ?array $options = null): GetCategoriesResponse;

    /**
     * @param CreateUpdateCategoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateUpdateCategoryResponse
     */
    public function createUpdateCategory(CreateUpdateCategoryRequest $request, ?array $options = null): CreateUpdateCategoryResponse;

    /**
     * @param CreateUpdateBatchCategoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateUpdateBatchCategoryResponse
     */
    public function createUpdateBatchCategory(CreateUpdateBatchCategoryRequest $request, ?array $options = null): CreateUpdateBatchCategoryResponse;

    /**
     * @param string $id Category ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCategoryDetails
     */
    public function getCategoryInfo(string $id, ?array $options = null): GetCategoryDetails;

    /**
     * Getting access to Brevo eCommerce.
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
     * @param GetEcommerceAttributionMetricsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetEcommerceAttributionMetricsResponse
     */
    public function getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(GetEcommerceAttributionMetricsRequest $request = new GetEcommerceAttributionMetricsRequest(), ?array $options = null): GetEcommerceAttributionMetricsResponse;

    /**
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
     * @return GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse
     */
    public function getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse;

    /**
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
     * @return GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse
     */
    public function getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetEcommerceConfigDisplayCurrencyResponse
     */
    public function getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount(?array $options = null): GetEcommerceConfigDisplayCurrencyResponse;

    /**
     * @param SetConfigDisplayCurrencyRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SetConfigDisplayCurrencyResponse
     */
    public function setConfigDisplayCurrency(SetConfigDisplayCurrencyRequest $request, ?array $options = null): SetConfigDisplayCurrencyResponse;

    /**
     * Get all the orders
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
     * @param CreateBatchOrderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateBatchOrderResponse
     */
    public function createBatchOrder(CreateBatchOrderRequest $request, ?array $options = null): CreateBatchOrderResponse;

    /**
     * @param GetProductsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetProductsResponse
     */
    public function getProducts(GetProductsRequest $request = new GetProductsRequest(), ?array $options = null): GetProductsResponse;

    /**
     * @param CreateUpdateProductRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateUpdateProductResponse
     */
    public function createUpdateProduct(CreateUpdateProductRequest $request, ?array $options = null): CreateUpdateProductResponse;

    /**
     * @param CreateUpdateBatchProductsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateUpdateBatchProductsResponse
     */
    public function createUpdateBatchProducts(CreateUpdateBatchProductsRequest $request, ?array $options = null): CreateUpdateBatchProductsResponse;

    /**
     * @param string $id Product ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetProductDetails
     */
    public function getProductInfo(string $id, ?array $options = null): GetProductDetails;

    /**
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
