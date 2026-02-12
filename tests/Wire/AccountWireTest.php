<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Account\Requests\GetAccountActivityRequest;

class AccountWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAccount(): void {
        $testId = 'account.get_account.0';
        $this->client->account->getAccount(
            [
                'headers' => [
                    'X-Test-Id' => 'account.get_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/account",
            null,
            1
        );
    }

    /**
     */
    public function testGetAccountActivity(): void {
        $testId = 'account.get_account_activity.0';
        $this->client->account->getAccountActivity(
            new GetAccountActivityRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'account.get_account_activity.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/organization/activities",
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
