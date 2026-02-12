<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\SmsTemplates\Requests\GetSmsTemplatesRequest;

class SmsTemplatesWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetSmsTemplates(): void {
        $testId = 'sms_templates.get_sms_templates.0';
        $this->client->smsTemplates->getSmsTemplates(
            new GetSmsTemplatesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_templates.get_sms_templates.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/transactionalSMS/templates",
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
