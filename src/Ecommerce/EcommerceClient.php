<?php

namespace Brevo\Ecommerce;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Ecommerce\Requests\GetCategoriesRequest;
use Brevo\Ecommerce\Types\GetCategoriesResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\Ecommerce\Requests\CreateUpdateCategoryRequest;
use Brevo\Ecommerce\Types\CreateUpdateCategoryResponse;
use Brevo\Ecommerce\Requests\CreateUpdateBatchCategoryRequest;
use Brevo\Ecommerce\Types\CreateUpdateBatchCategoryResponse;
use Brevo\Types\GetCategoryDetails;
use Brevo\Ecommerce\Requests\GetEcommerceAttributionMetricsRequest;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsResponse;
use Brevo\Core\Json\JsonSerializer;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse;
use Brevo\Ecommerce\Types\GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Types\GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse;
use Brevo\Ecommerce\Types\GetEcommerceConfigDisplayCurrencyResponse;
use Brevo\Ecommerce\Requests\SetConfigDisplayCurrencyRequest;
use Brevo\Ecommerce\Types\SetConfigDisplayCurrencyResponse;
use Brevo\Ecommerce\Requests\GetOrdersRequest;
use Brevo\Core\Json\JsonDecoder;
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

class EcommerceClient implements EcommerceClientInterface
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
     * Retrieve a paginated list of all ecommerce categories stored in your Brevo account. Results are sorted by creation date in descending order by default, and can be filtered by category IDs, name, modification date, creation date, or deletion status. The response includes a `count` field with the total number of matching categories, and pagination defaults to 50 categories per page (maximum 100).
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getCategories(GetCategoriesRequest $request = new GetCategoriesRequest(), ?array $options = null): ?GetCategoriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->ids != null) {
            $query['ids'] = $request->ids;
        }
        if ($request->name != null) {
            $query['name'] = $request->name;
        }
        if ($request->modifiedSince != null) {
            $query['modifiedSince'] = $request->modifiedSince;
        }
        if ($request->createdSince != null) {
            $query['createdSince'] = $request->createdSince;
        }
        if ($request->isDeleted != null) {
            $query['isDeleted'] = $request->isDeleted;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "categories",
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
                return GetCategoriesResponse::fromJson($json);
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
     * Create a new ecommerce category or update an existing one, identified by the mandatory `id` field. When `updateEnabled` is set to `false` (the default), the endpoint performs an insert and returns `201`; if the category ID already exists, a `400` error is returned. When `updateEnabled` is `true`, the endpoint performs an upsert, returning `201` for a new category or `204` when an existing category is updated. The `name` field is mandatory for creation but optional for updates.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createUpdateCategory(CreateUpdateCategoryRequest $request, ?array $options = null): ?CreateUpdateCategoryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "categories",
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
                return CreateUpdateCategoryResponse::fromJson($json);
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
     * Create or update multiple ecommerce categories in a single request. The `categories` array accepts up to 100 category objects, each requiring a unique `id`. When `updateEnabled` is `false` (the default), all categories are inserted as new; if any ID already exists, a `400` error is returned. When `updateEnabled` is `true`, existing categories are updated and new ones are created via upsert. Duplicate IDs within the same request payload are rejected. The response returns the count of created and updated categories.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createUpdateBatchCategory(CreateUpdateBatchCategoryRequest $request, ?array $options = null): ?CreateUpdateBatchCategoryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "categories/batch",
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
                return CreateUpdateBatchCategoryResponse::fromJson($json);
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
     * Retrieve the full details of a single ecommerce category by its unique ID. The response includes the category name, URL, creation and modification timestamps, and deletion status. Returns a `404` error if no category matches the provided ID.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getCategoryInfo(string $id, ?array $options = null): ?GetCategoryDetails
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "categories/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCategoryDetails::fromJson($json);
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function activateTheECommerceApp(?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/activate",
                    method: HttpMethod::POST,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
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

    /**
     * Retrieve aggregated ecommerce attribution metrics for one or more Brevo email campaigns, SMS campaigns, or automation workflows. You can optionally filter by a date range using `periodFrom` and `periodTo` in RFC3339 format. The response includes per-source metrics (orders count, revenue, and average basket) as well as aggregated totals across all requested sources.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(GetEcommerceAttributionMetricsRequest $request = new GetEcommerceAttributionMetricsRequest(), ?array $options = null): ?GetEcommerceAttributionMetricsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->periodFrom != null) {
            $query['periodFrom'] = JsonSerializer::serializeDateTime($request->periodFrom);
        }
        if ($request->periodTo != null) {
            $query['periodTo'] = JsonSerializer::serializeDateTime($request->periodTo);
        }
        if ($request->emailCampaignIdArray != null) {
            $query['emailCampaignId[]'] = $request->emailCampaignIdArray;
        }
        if ($request->smsCampaignIdArray != null) {
            $query['smsCampaignId[]'] = $request->smsCampaignIdArray;
        }
        if ($request->automationWorkflowEmailIdArray != null) {
            $query['automationWorkflowEmailId[]'] = $request->automationWorkflowEmailIdArray;
        }
        if ($request->automationWorkflowSmsIdArray != null) {
            $query['automationWorkflowSmsId[]'] = $request->automationWorkflowSmsIdArray;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/attribution/metrics",
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
                return GetEcommerceAttributionMetricsResponse::fromJson($json);
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
     * Retrieve detailed attribution metrics for a single Brevo campaign or automation workflow, identified by its conversion source type and ID. The response includes orders count, revenue, average basket value, and the number of new customers attributed to that specific campaign or workflow.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): ?GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/attribution/metrics/{$conversionSource}/{$conversionSourceId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse::fromJson($json);
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
     * Retrieve the list of products whose sales have been attributed to a specific Brevo campaign or automation workflow. Each product entry includes its ID, name, SKU, image URL, product URL, price, revenue, and orders count. The conversion source type must be one of `email_campaign`, `sms_campaign`, `automation_workflow_email`, or `automation_workflow_sms`.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(string $conversionSource, string $conversionSourceId, ?array $options = null): ?GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/attribution/products/{$conversionSource}/{$conversionSourceId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse::fromJson($json);
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
     * Retrieve the ISO 4217 display currency code currently configured for your Brevo ecommerce account. This currency is used to display monetary values across the ecommerce dashboard and reports. Returns a `403` error if ecommerce is not activated on the account.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount(?array $options = null): ?GetEcommerceConfigDisplayCurrencyResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/config/displayCurrency",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEcommerceConfigDisplayCurrencyResponse::fromJson($json);
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
     * Set or update the ISO 4217 display currency code for your Brevo ecommerce account. This currency determines how monetary values are displayed in the ecommerce dashboard and reports. The provided currency code must be a valid ISO 4217 code; invalid codes result in a `422` error. Returns a `403` error if ecommerce is not activated on the account.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function setConfigDisplayCurrency(SetConfigDisplayCurrencyRequest $request, ?array $options = null): ?SetConfigDisplayCurrencyResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "ecommerce/config/displayCurrency",
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
                return SetConfigDisplayCurrencyResponse::fromJson($json);
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getOrders(GetOrdersRequest $request = new GetOrdersRequest(), ?array $options = null): mixed
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->modifiedSince != null) {
            $query['modifiedSince'] = $request->modifiedSince;
        }
        if ($request->createdSince != null) {
            $query['createdSince'] = $request->createdSince;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "orders",
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
                return JsonDecoder::decodeMixed($json);
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createOrder(Order $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "orders/status",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
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
     * @return ?CreateBatchOrderResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createBatchOrder(CreateBatchOrderRequest $request, ?array $options = null): ?CreateBatchOrderResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "orders/status/batch",
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
                return CreateBatchOrderResponse::fromJson($json);
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
     * Retrieve a paginated list of all ecommerce products stored in your Brevo account. Results are sorted by creation date in descending order by default, and can be filtered by product IDs, name (minimum 3 characters), price range, category IDs, modification date, creation date, or deletion status. Use the `search` parameter to query across SKU, name, and ID simultaneously — results are prioritized as exact SKU match > SKU prefix match > name match > ID match. Pagination defaults to 50 products per page (maximum 1000), and the response includes a `count` field with the total number of matching products.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getProducts(GetProductsRequest $request = new GetProductsRequest(), ?array $options = null): ?GetProductsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->ids != null) {
            $query['ids'] = $request->ids;
        }
        if ($request->search != null) {
            $query['search'] = $request->search;
        }
        if ($request->name != null) {
            $query['name'] = $request->name;
        }
        if ($request->priceLte != null) {
            $query['price[lte]'] = $request->priceLte;
        }
        if ($request->priceGte != null) {
            $query['price[gte]'] = $request->priceGte;
        }
        if ($request->priceLt != null) {
            $query['price[lt]'] = $request->priceLt;
        }
        if ($request->priceGt != null) {
            $query['price[gt]'] = $request->priceGt;
        }
        if ($request->priceEq != null) {
            $query['price[eq]'] = $request->priceEq;
        }
        if ($request->priceNe != null) {
            $query['price[ne]'] = $request->priceNe;
        }
        if ($request->alternativePriceLte != null) {
            $query['alternativePrice[lte]'] = $request->alternativePriceLte;
        }
        if ($request->alternativePriceGte != null) {
            $query['alternativePrice[gte]'] = $request->alternativePriceGte;
        }
        if ($request->alternativePriceLt != null) {
            $query['alternativePrice[lt]'] = $request->alternativePriceLt;
        }
        if ($request->alternativePriceGt != null) {
            $query['alternativePrice[gt]'] = $request->alternativePriceGt;
        }
        if ($request->alternativePriceEq != null) {
            $query['alternativePrice[eq]'] = $request->alternativePriceEq;
        }
        if ($request->alternativePriceNe != null) {
            $query['alternativePrice[ne]'] = $request->alternativePriceNe;
        }
        if ($request->categories != null) {
            $query['categories'] = $request->categories;
        }
        if ($request->modifiedSince != null) {
            $query['modifiedSince'] = $request->modifiedSince;
        }
        if ($request->createdSince != null) {
            $query['createdSince'] = $request->createdSince;
        }
        if ($request->sortByField != null) {
            $query['sortByField'] = $request->sortByField;
        }
        if ($request->isDeleted != null) {
            $query['isDeleted'] = $request->isDeleted;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "products",
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
                return GetProductsResponse::fromJson($json);
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
     * Create a new ecommerce product or update an existing one, identified by the mandatory `id` field. When `updateEnabled` is `false` (the default), the endpoint inserts a new product and returns `201`; if the product ID already exists, a `400` error is returned. When `updateEnabled` is `true`, the endpoint performs an upsert, returning `201` for a new product or `204` for an update. The `name` field is mandatory for creation but optional for updates. Product images are downloaded, validated (max 5 MB, formats: jpeg, jpg, png, bmp, gif, webp), and re-hosted on S3. The `metaInfo` object supports up to 20 keys with a cumulative size limit of approximately 1000 KB.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createUpdateProduct(CreateUpdateProductRequest $request, ?array $options = null): ?CreateUpdateProductResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "products",
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
                return CreateUpdateProductResponse::fromJson($json);
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
     * Create or update multiple ecommerce products in a single request. The `products` array accepts up to 100 product objects for creation (or up to 1000 when `updateEnabled` is `true` and the account has an increased limit). Each product requires a unique `id` and `name` (name is mandatory for creation only). When `updateEnabled` is `false`, all products are inserted as new; if any ID already exists, a `400` error is returned. When `updateEnabled` is `true`, existing products are updated and new ones are created via upsert. Duplicate IDs within the same request payload are rejected. The response returns the count of created and updated products.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createUpdateBatchProducts(CreateUpdateBatchProductsRequest $request, ?array $options = null): ?CreateUpdateBatchProductsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "products/batch",
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
                return CreateUpdateBatchProductsResponse::fromJson($json);
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
     * Retrieve the full details of a single ecommerce product by its unique ID. The response includes the product name, price, SKU, URL, image URLs (original and thumbnails), categories, stock level, meta information, creation and modification timestamps, and deletion status. Returns a `404` error if no product matches the provided ID.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getProductInfo(string $id, ?array $options = null): ?GetProductDetails
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "products/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetProductDetails::fromJson($json);
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
     * Register a contact to receive an alert for a specific product event, such as `back_in_stock`. At least one contact identifier (`ext_id`, `email`, or `sms`) must be provided; when multiple are given, priority is `ext_id` > `email` > `sms`. Returns a `404` error if the product ID does not exist, and a `403` error if product alerts are not enabled for the account.
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createProductAlert(string $id, string $type, CreateProductAlertRequest $request = new CreateProductAlertRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "products/{$id}/alerts/{$type}",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
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
