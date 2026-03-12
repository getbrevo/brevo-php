<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\ExternalFeeds\Requests\GetAllExternalFeedsRequest;
use DateTime;
use Brevo\ExternalFeeds\Requests\CreateExternalFeedRequest;
use Brevo\ExternalFeeds\Types\CreateExternalFeedRequestAuthType;
use Brevo\ExternalFeeds\Requests\UpdateExternalFeedRequest;

class ExternalFeedsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAllExternalFeeds(): void {
        $testId = 'external_feeds.get_all_external_feeds.0';
        $this->client->externalFeeds->getAllExternalFeeds(
            new GetAllExternalFeedsRequest([
                'search' => 'product',
                'startDate' => new DateTime('2024-01-01'),
                'endDate' => new DateTime('2024-01-31'),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'external_feeds.get_all_external_feeds.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/feeds",
            ['search' => 'product', 'startDate' => '2024-01-01', 'endDate' => '2024-01-31'],
            1
        );
    }

    /**
     */
    public function testCreateExternalFeed(): void {
        $testId = 'external_feeds.create_external_feed.0';
        $this->client->externalFeeds->createExternalFeed(
            new CreateExternalFeedRequest([
                'name' => 'Public API Feed',
                'url' => 'https://jsonplaceholder.typicode.com/posts',
                'authType' => CreateExternalFeedRequestAuthType::NoAuth->value,
                'maxRetries' => 3,
                'cache' => true,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'external_feeds.create_external_feed.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/feeds",
            null,
            1
        );
    }

    /**
     */
    public function testGetExternalFeedByUuid(): void {
        $testId = 'external_feeds.get_external_feed_by_uuid.0';
        $this->client->externalFeeds->getExternalFeedByUuid(
            'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
            [
                'headers' => [
                    'X-Test-Id' => 'external_feeds.get_external_feed_by_uuid.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/feeds/b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateExternalFeed(): void {
        $testId = 'external_feeds.update_external_feed.0';
        $this->client->externalFeeds->updateExternalFeed(
            'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
            new UpdateExternalFeedRequest([
                'name' => 'Updated Product Catalog',
                'url' => 'https://api.newstore.com/products/v2',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'external_feeds.update_external_feed.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/feeds/b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteExternalFeed(): void {
        $testId = 'external_feeds.delete_external_feed.0';
        $this->client->externalFeeds->deleteExternalFeed(
            'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
            [
                'headers' => [
                    'X-Test-Id' => 'external_feeds.delete_external_feed.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/feeds/b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6",
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
