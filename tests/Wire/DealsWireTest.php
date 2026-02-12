<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Deals\Requests\GetCrmDealsRequest;
use Brevo\Deals\Requests\PostCrmDealsRequest;
use Brevo\Deals\Requests\PostCrmDealsImportRequest;
use Brevo\Utils\File;
use Brevo\Deals\Requests\PatchCrmDealsLinkUnlinkIdRequest;
use Brevo\Deals\Requests\PatchCrmDealsIdRequest;

class DealsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetDealAttributes(): void {
        $testId = 'deals.get_deal_attributes.0';
        $this->client->deals->getDealAttributes(
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_deal_attributes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/attributes/deals",
            null,
            1
        );
    }

    /**
     */
    public function testGetAllDeals(): void {
        $testId = 'deals.get_all_deals.0';
        $this->client->deals->getAllDeals(
            new GetCrmDealsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_all_deals.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/deals",
            null,
            1
        );
    }

    /**
     */
    public function testCreateADeal(): void {
        $testId = 'deals.create_a_deal.0';
        $this->client->deals->createADeal(
            new PostCrmDealsRequest([
                'name' => 'Deal: Connect with company',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'deals.create_a_deal.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/deals",
            null,
            1
        );
    }

    /**
     */
    public function testImportDealsCreationAndUpdation(): void {
        $testId = 'deals.import_deals_creation_and_updation.0';
        $this->client->deals->importDealsCreationAndUpdation(
            new PostCrmDealsImportRequest([
                'file' => File::createFromString("example_file", "example_file"),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'deals.import_deals_creation_and_updation.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/deals/import",
            null,
            1
        );
    }

    /**
     */
    public function testLinkAndUnlinkADealWithContactsAndCompanies(): void {
        $testId = 'deals.link_and_unlink_a_deal_with_contacts_and_companies.0';
        $this->client->deals->linkAndUnlinkADealWithContactsAndCompanies(
            'id',
            new PatchCrmDealsLinkUnlinkIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'deals.link_and_unlink_a_deal_with_contacts_and_companies.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/crm/deals/link-unlink/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetADeal(): void {
        $testId = 'deals.get_a_deal.0';
        $this->client->deals->getADeal(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_a_deal.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/deals/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteADeal(): void {
        $testId = 'deals.delete_a_deal.0';
        $this->client->deals->deleteADeal(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'deals.delete_a_deal.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/crm/deals/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateADeal(): void {
        $testId = 'deals.update_a_deal.0';
        $this->client->deals->updateADeal(
            'id',
            new PatchCrmDealsIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'deals.update_a_deal.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/crm/deals/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetPipelineStages(): void {
        $testId = 'deals.get_pipeline_stages.0';
        $this->client->deals->getPipelineStages(
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_pipeline_stages.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/pipeline/details",
            null,
            1
        );
    }

    /**
     */
    public function testGetAllPipelines(): void {
        $testId = 'deals.get_all_pipelines.0';
        $this->client->deals->getAllPipelines(
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_all_pipelines.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/pipeline/details/all",
            null,
            1
        );
    }

    /**
     */
    public function testGetAPipeline(): void {
        $testId = 'deals.get_a_pipeline.0';
        $this->client->deals->getAPipeline(
            'pipelineID',
            [
                'headers' => [
                    'X-Test-Id' => 'deals.get_a_pipeline.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/pipeline/details/pipelineID",
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
