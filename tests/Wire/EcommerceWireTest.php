<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Ecommerce\Requests\GetCategoriesRequest;
use Brevo\Ecommerce\Requests\CreateUpdateCategoryRequest;
use Brevo\Ecommerce\Requests\CreateUpdateBatchCategoryRequest;
use Brevo\Ecommerce\Types\CreateUpdateBatchCategoryRequestCategoriesItem;
use Brevo\Ecommerce\Requests\GetEcommerceAttributionMetricsRequest;
use DateTime;
use Brevo\Ecommerce\Types\GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Types\GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource;
use Brevo\Ecommerce\Requests\SetConfigDisplayCurrencyRequest;
use Brevo\Ecommerce\Requests\GetOrdersRequest;
use Brevo\Types\Order;
use Brevo\Types\OrderProductsItem;
use Brevo\Ecommerce\Requests\CreateBatchOrderRequest;
use Brevo\Ecommerce\Requests\GetProductsRequest;
use Brevo\Ecommerce\Requests\CreateUpdateProductRequest;
use Brevo\Ecommerce\Requests\CreateUpdateBatchProductsRequest;
use Brevo\Ecommerce\Types\CreateUpdateBatchProductsRequestProductsItem;
use Brevo\Ecommerce\Requests\CreateProductAlertRequest;

class EcommerceWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetCategories(): void {
        $testId = 'ecommerce.get_categories.0';
        $this->client->ecommerce->getCategories(
            new GetCategoriesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_categories.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/categories",
            null,
            1
        );
    }

    /**
     */
    public function testCreateUpdateCategory(): void {
        $testId = 'ecommerce.create_update_category.0';
        $this->client->ecommerce->createUpdateCategory(
            new CreateUpdateCategoryRequest([
                'id' => 'CAT123',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_update_category.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/categories",
            null,
            1
        );
    }

    /**
     */
    public function testCreateUpdateBatchCategory(): void {
        $testId = 'ecommerce.create_update_batch_category.0';
        $this->client->ecommerce->createUpdateBatchCategory(
            new CreateUpdateBatchCategoryRequest([
                'categories' => [
                    new CreateUpdateBatchCategoryRequestCategoriesItem([
                        'id' => 'CAT123',
                    ]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_update_batch_category.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/categories/batch",
            null,
            1
        );
    }

    /**
     */
    public function testGetCategoryInfo(): void {
        $testId = 'ecommerce.get_category_info.0';
        $this->client->ecommerce->getCategoryInfo(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_category_info.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/categories/id",
            null,
            1
        );
    }

    /**
     */
    public function testActivateTheECommerceApp(): void {
        $testId = 'ecommerce.activate_the_e_commerce_app.0';
        $this->client->ecommerce->activateTheECommerceApp(
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.activate_the_e_commerce_app.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/ecommerce/activate",
            null,
            1
        );
    }

    /**
     */
    public function testGetAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(): void {
        $testId = 'ecommerce.get_attribution_metrics_for_one_or_more_brevo_campaigns_or_workflows.0';
        $this->client->ecommerce->getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(
            new GetEcommerceAttributionMetricsRequest([
                'periodFrom' => new DateTime('2022-01-02T00:00:00Z'),
                'periodTo' => new DateTime('2022-01-03T00:00:00Z'),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_attribution_metrics_for_one_or_more_brevo_campaigns_or_workflows.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/ecommerce/attribution/metrics",
            ['periodFrom' => '2022-01-02T00:00:00Z', 'periodTo' => '2022-01-03T00:00:00Z'],
            1
        );
    }

    /**
     */
    public function testGetDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(): void {
        $testId = 'ecommerce.get_detailed_attribution_metrics_for_a_single_brevo_campaign_or_workflow.0';
        $this->client->ecommerce->getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(
            GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
            'sale',
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_detailed_attribution_metrics_for_a_single_brevo_campaign_or_workflow.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/ecommerce/attribution/metrics/email_campaign/sale",
            null,
            1
        );
    }

    /**
     */
    public function testGetAttributedProductSalesForASingleBrevoCampaignOrWorkflow(): void {
        $testId = 'ecommerce.get_attributed_product_sales_for_a_single_brevo_campaign_or_workflow.0';
        $this->client->ecommerce->getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(
            GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
            'sale',
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_attributed_product_sales_for_a_single_brevo_campaign_or_workflow.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/ecommerce/attribution/products/email_campaign/sale",
            null,
            1
        );
    }

    /**
     */
    public function testGetTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount(): void {
        $testId = 'ecommerce.get_the_iso4217compliant_display_currency_code_for_your_brevo_account.0';
        $this->client->ecommerce->getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount(
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_the_iso4217compliant_display_currency_code_for_your_brevo_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/ecommerce/config/displayCurrency",
            null,
            1
        );
    }

    /**
     */
    public function testSetConfigDisplayCurrency(): void {
        $testId = 'ecommerce.set_config_display_currency.0';
        $this->client->ecommerce->setConfigDisplayCurrency(
            new SetConfigDisplayCurrencyRequest([
                'code' => 'EUR',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.set_config_display_currency.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/ecommerce/config/displayCurrency",
            null,
            1
        );
    }

    /**
     */
    public function testGetOrders(): void {
        $testId = 'ecommerce.get_orders.0';
        $this->client->ecommerce->getOrders(
            new GetOrdersRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_orders.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/orders",
            null,
            1
        );
    }

    /**
     */
    public function testCreateOrder(): void {
        $testId = 'ecommerce.create_order.0';
        $this->client->ecommerce->createOrder(
            new Order([
                'amount' => 308.42,
                'createdAt' => '2021-07-29T20:59:23.383Z',
                'id' => '14',
                'products' => [
                    new OrderProductsItem([
                        'price' => 99.99,
                        'productId' => 'P1',
                        'quantity' => 10,
                    ]),
                ],
                'status' => 'completed',
                'updatedAt' => '2021-07-30T10:59:23.383Z',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_order.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/orders/status",
            null,
            1
        );
    }

    /**
     */
    public function testCreateBatchOrder(): void {
        $testId = 'ecommerce.create_batch_order.0';
        $this->client->ecommerce->createBatchOrder(
            new CreateBatchOrderRequest([
                'orders' => [
                    new Order([
                        'amount' => 308.42,
                        'createdAt' => '2021-07-29T20:59:23.383Z',
                        'id' => '14',
                        'products' => [
                            new OrderProductsItem([
                                'price' => 99.99,
                                'productId' => 'P1',
                                'quantity' => 10,
                            ]),
                        ],
                        'status' => 'completed',
                        'updatedAt' => '2021-07-30T10:59:23.383Z',
                    ]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_batch_order.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/orders/status/batch",
            null,
            1
        );
    }

    /**
     */
    public function testGetProducts(): void {
        $testId = 'ecommerce.get_products.0';
        $this->client->ecommerce->getProducts(
            new GetProductsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_products.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/products",
            null,
            1
        );
    }

    /**
     */
    public function testCreateUpdateProduct(): void {
        $testId = 'ecommerce.create_update_product.0';
        $this->client->ecommerce->createUpdateProduct(
            new CreateUpdateProductRequest([
                'id' => 'P11',
                'name' => 'Iphone 11',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_update_product.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/products",
            null,
            1
        );
    }

    /**
     */
    public function testCreateUpdateBatchProducts(): void {
        $testId = 'ecommerce.create_update_batch_products.0';
        $this->client->ecommerce->createUpdateBatchProducts(
            new CreateUpdateBatchProductsRequest([
                'products' => [
                    new CreateUpdateBatchProductsRequestProductsItem([
                        'id' => 'P11',
                        'name' => 'Iphone 11',
                    ]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_update_batch_products.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/products/batch",
            null,
            1
        );
    }

    /**
     */
    public function testGetProductInfo(): void {
        $testId = 'ecommerce.get_product_info.0';
        $this->client->ecommerce->getProductInfo(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.get_product_info.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/products/id",
            null,
            1
        );
    }

    /**
     */
    public function testCreateProductAlert(): void {
        $testId = 'ecommerce.create_product_alert.0';
        $this->client->ecommerce->createProductAlert(
            'id',
            'back_in_stock',
            new CreateProductAlertRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'ecommerce.create_product_alert.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/products/id/alerts/back_in_stock",
            null,
            1
        );
    }

    /**
     */
    protected function setUp(): void {
        parent::setUp();
        $this->client = new Brevo(
            apiKey: 'test-apiKey',
        options: [
            'baseUrl' => 'http://localhost:8080',
        ],
        );
    }
}
