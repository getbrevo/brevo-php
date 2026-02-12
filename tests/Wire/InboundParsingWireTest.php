<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\InboundParsing\Requests\GetInboundEmailEventsRequest;

class InboundParsingWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetInboundEmailEvents(): void {
        $testId = 'inbound_parsing.get_inbound_email_events.0';
        $this->client->inboundParsing->getInboundEmailEvents(
            new GetInboundEmailEventsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'inbound_parsing.get_inbound_email_events.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/inbound/events",
            null,
            1
        );
    }

    /**
     */
    public function testGetInboundEmailEventsByUuid(): void {
        $testId = 'inbound_parsing.get_inbound_email_events_by_uuid.0';
        $this->client->inboundParsing->getInboundEmailEventsByUuid(
            'uuid',
            [
                'headers' => [
                    'X-Test-Id' => 'inbound_parsing.get_inbound_email_events_by_uuid.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/inbound/events/uuid",
            null,
            1
        );
    }

    /**
     */
    public function testGetInboundEmailAttachment(): void {
        $testId = 'inbound_parsing.get_inbound_email_attachment.0';
        $this->client->inboundParsing->getInboundEmailAttachment(
            'downloadToken',
            [
                'headers' => [
                    'X-Test-Id' => 'inbound_parsing.get_inbound_email_attachment.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/inbound/attachments/downloadToken",
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
