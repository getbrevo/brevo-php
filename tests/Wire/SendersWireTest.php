<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Senders\Requests\GetSendersRequest;
use Brevo\Senders\Requests\CreateSenderRequest;
use Brevo\Senders\Requests\UpdateSenderRequest;
use Brevo\Senders\Requests\ValidateSenderByOtpRequest;

class SendersWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetSenders(): void {
        $testId = 'senders.get_senders.0';
        $this->client->senders->getSenders(
            new GetSendersRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'senders.get_senders.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/senders",
            null,
            1
        );
    }

    /**
     */
    public function testCreateSender(): void {
        $testId = 'senders.create_sender.0';
        $this->client->senders->createSender(
            new CreateSenderRequest([
                'email' => 'support@example.com',
                'name' => 'Support Team',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'senders.create_sender.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/senders",
            null,
            1
        );
    }

    /**
     */
    public function testGetIps(): void {
        $testId = 'senders.get_ips.0';
        $this->client->senders->getIps(
            [
                'headers' => [
                    'X-Test-Id' => 'senders.get_ips.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/senders/ips",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSender(): void {
        $testId = 'senders.update_sender.0';
        $this->client->senders->updateSender(
            1000000,
            new UpdateSenderRequest([
                'name' => 'New Support Team',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'senders.update_sender.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/senders/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteSender(): void {
        $testId = 'senders.delete_sender.0';
        $this->client->senders->deleteSender(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'senders.delete_sender.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/senders/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testGetIpsFromSender(): void {
        $testId = 'senders.get_ips_from_sender.0';
        $this->client->senders->getIpsFromSender(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'senders.get_ips_from_sender.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/senders/1000000/ips",
            null,
            1
        );
    }

    /**
     */
    public function testValidateSenderByOtp(): void {
        $testId = 'senders.validate_sender_by_otp.0';
        $this->client->senders->validateSenderByOtp(
            1000000,
            new ValidateSenderByOtpRequest([
                'otp' => 123456,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'senders.validate_sender_by_otp.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/senders/1000000/validate",
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
