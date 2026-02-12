<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Event\Requests\CreateEventRequest;
use Brevo\Event\Types\CreateEventRequestIdentifiers;

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
