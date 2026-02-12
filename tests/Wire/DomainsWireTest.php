<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Domains\Requests\CreateDomainRequest;

class DomainsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetDomains(): void {
        $testId = 'domains.get_domains.0';
        $this->client->domains->getDomains(
            [
                'headers' => [
                    'X-Test-Id' => 'domains.get_domains.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/senders/domains",
            null,
            1
        );
    }

    /**
     */
    public function testCreateDomain(): void {
        $testId = 'domains.create_domain.0';
        $this->client->domains->createDomain(
            new CreateDomainRequest([
                'name' => 'mycompany.com',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'domains.create_domain.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/senders/domains",
            null,
            1
        );
    }

    /**
     */
    public function testGetDomainConfiguration(): void {
        $testId = 'domains.get_domain_configuration.0';
        $this->client->domains->getDomainConfiguration(
            'domainName',
            [
                'headers' => [
                    'X-Test-Id' => 'domains.get_domain_configuration.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/senders/domains/domainName",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteDomain(): void {
        $testId = 'domains.delete_domain.0';
        $this->client->domains->deleteDomain(
            'domainName',
            [
                'headers' => [
                    'X-Test-Id' => 'domains.delete_domain.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/senders/domains/domainName",
            null,
            1
        );
    }

    /**
     */
    public function testAuthenticateDomain(): void {
        $testId = 'domains.authenticate_domain.0';
        $this->client->domains->authenticateDomain(
            'domainName',
            [
                'headers' => [
                    'X-Test-Id' => 'domains.authenticate_domain.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/senders/domains/domainName/authenticate",
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
