<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Companies\Requests\GetCompaniesRequest;
use Brevo\Companies\Requests\PostCompaniesRequest;
use Brevo\Companies\Requests\PostCompaniesImportRequest;
use Brevo\Utils\File;
use Brevo\Companies\Requests\PatchCompaniesLinkUnlinkIdRequest;
use Brevo\Companies\Requests\PatchCompaniesIdRequest;
use Brevo\Companies\Requests\PostCrmAttributesRequest;
use Brevo\Companies\Types\PostCrmAttributesRequestAttributeType;
use Brevo\Companies\Types\PostCrmAttributesRequestObjectType;

class CompaniesWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAllCompanies(): void {
        $testId = 'companies.get_all_companies.0';
        $this->client->companies->getAllCompanies(
            new GetCompaniesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.get_all_companies.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/companies",
            null,
            1
        );
    }

    /**
     */
    public function testCreateACompany(): void {
        $testId = 'companies.create_a_company.0';
        $this->client->companies->createACompany(
            new PostCompaniesRequest([
                'name' => 'company',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.create_a_company.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/companies",
            null,
            1
        );
    }

    /**
     */
    public function testImportCompaniesCreationAndUpdation(): void {
        $testId = 'companies.import_companies_creation_and_updation.0';
        $this->client->companies->importCompaniesCreationAndUpdation(
            new PostCompaniesImportRequest([
                'file' => File::createFromString("example_file", "example_file"),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.import_companies_creation_and_updation.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/companies/import",
            null,
            1
        );
    }

    /**
     */
    public function testLinkAndUnlinkCompanyWithContactAndDeal(): void {
        $testId = 'companies.link_and_unlink_company_with_contact_and_deal.0';
        $this->client->companies->linkAndUnlinkCompanyWithContactAndDeal(
            'id',
            new PatchCompaniesLinkUnlinkIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.link_and_unlink_company_with_contact_and_deal.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/companies/link-unlink/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetACompany(): void {
        $testId = 'companies.get_a_company.0';
        $this->client->companies->getACompany(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'companies.get_a_company.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/companies/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteACompany(): void {
        $testId = 'companies.delete_a_company.0';
        $this->client->companies->deleteACompany(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'companies.delete_a_company.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/companies/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateACompany(): void {
        $testId = 'companies.update_a_company.0';
        $this->client->companies->updateACompany(
            'id',
            new PatchCompaniesIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.update_a_company.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/companies/id",
            null,
            1
        );
    }

    /**
     */
    public function testCreateACompanyDealAttribute(): void {
        $testId = 'companies.create_a_company_deal_attribute.0';
        $this->client->companies->createACompanyDealAttribute(
            new PostCrmAttributesRequest([
                'attributeType' => PostCrmAttributesRequestAttributeType::Text->value,
                'label' => 'Attribute Label',
                'objectType' => PostCrmAttributesRequestObjectType::Companies->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'companies.create_a_company_deal_attribute.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/attributes",
            null,
            1
        );
    }

    /**
     */
    public function testGetCompanyAttributes(): void {
        $testId = 'companies.get_company_attributes.0';
        $this->client->companies->getCompanyAttributes(
            [
                'headers' => [
                    'X-Test-Id' => 'companies.get_company_attributes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/attributes/companies",
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
