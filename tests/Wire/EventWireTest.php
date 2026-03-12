<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Event\Requests\CreateEventRequest;
use Brevo\Event\Types\CreateEventRequestIdentifiers;
use Brevo\Event\Types\CreateBatchEventsRequestItem;
use Brevo\Event\Types\CreateBatchEventsRequestItemIdentifiers;

class EventWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testCreateEvent(): void {
        $testId = 'event.create_event.0';
        $this->client->event->createEvent(
            new CreateEventRequest([
                'eventName' => 'video_played',
                'identifiers' => new CreateEventRequestIdentifiers([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'event.create_event.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/events",
            null,
            1
        );
    }

    /**
     */
    public function testCreateBatchEvents(): void {
        $testId = 'event.create_batch_events.0';
        $this->client->event->createBatchEvents(
            [
                new CreateBatchEventsRequestItem([
                    'eventName' => 'order_created',
                    'identifiers' => new CreateBatchEventsRequestItemIdentifiers([]),
                ]),
            ],
            [
                'headers' => [
                    'X-Test-Id' => 'event.create_batch_events.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/events/batch",
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
            'baseUrl' => getenv('WIREMOCK_URL') ?: 'http://localhost:8080',
        ],
        );
    }
}
