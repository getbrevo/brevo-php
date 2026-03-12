<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageRequestParams;
use Brevo\TransactionalWhatsApp\Requests\GetWhatsappEventReportRequest;

class TransactionalWhatsAppWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testSendWhatsappMessage(): void {
        $testId = 'transactional_whats_app.send_whatsapp_message.0';
        $this->client->transactionalWhatsApp->sendWhatsappMessage(
            new SendWhatsappMessageRequestParams([
                'contactNumbers' => [
                    'contactNumbers',
                ],
                'senderNumber' => 'senderNumber',
                'templateId' => 123,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_whats_app.send_whatsapp_message.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/whatsapp/sendMessage",
            null,
            1
        );
    }

    /**
     */
    public function testGetWhatsappEventReport(): void {
        $testId = 'transactional_whats_app.get_whatsapp_event_report.0';
        $this->client->transactionalWhatsApp->getWhatsappEventReport(
            new GetWhatsappEventReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_whats_app.get_whatsapp_event_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/whatsapp/statistics/events",
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
