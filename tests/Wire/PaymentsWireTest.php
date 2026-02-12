<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Payments\Requests\CreatePaymentRequestRequest;
use Brevo\Types\Cart;

class PaymentsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testCreatePaymentRequest(): void {
        $testId = 'payments.create_payment_request.0';
        $this->client->payments->createPaymentRequest(
            new CreatePaymentRequestRequest([
                'cart' => new Cart([
                    'currency' => 'EUR',
                    'specificAmount' => 1200,
                ]),
                'contactId' => 43,
                'reference' => 'Invoice #INV0001',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'payments.create_payment_request.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/payments/requests",
            null,
            1
        );
    }

    /**
     */
    public function testGetPaymentRequest(): void {
        $testId = 'payments.get_payment_request.0';
        $this->client->payments->getPaymentRequest(
            '050db7b0-9bb7-4c1e-9c68-5a8dace8c1dc',
            [
                'headers' => [
                    'X-Test-Id' => 'payments.get_payment_request.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/payments/requests/050db7b0-9bb7-4c1e-9c68-5a8dace8c1dc",
            null,
            1
        );
    }

    /**
     */
    public function testDeletePaymentRequest(): void {
        $testId = 'payments.delete_payment_request.0';
        $this->client->payments->deletePaymentRequest(
            '9ae7d68a-565c-4695-9381-d8fb3e3a14cc',
            [
                'headers' => [
                    'X-Test-Id' => 'payments.delete_payment_request.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/payments/requests/9ae7d68a-565c-4695-9381-d8fb3e3a14cc",
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
