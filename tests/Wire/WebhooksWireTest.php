<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Webhooks\Requests\GetWebhooksRequest;
use Brevo\Webhooks\Requests\CreateWebhookRequest;
use Brevo\Webhooks\Types\CreateWebhookRequestEventsItem;
use Brevo\Webhooks\Requests\ExportWebhooksHistoryRequest;
use Brevo\Webhooks\Types\ExportWebhooksHistoryRequestEvent;
use Brevo\Webhooks\Types\ExportWebhooksHistoryRequestType;
use Brevo\Webhooks\Requests\UpdateWebhookRequest;

class WebhooksWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetWebhooks(): void {
        $testId = 'webhooks.get_webhooks.0';
        $this->client->webhooks->getWebhooks(
            new GetWebhooksRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.get_webhooks.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/webhooks",
            null,
            1
        );
    }

    /**
     */
    public function testCreateWebhook(): void {
        $testId = 'webhooks.create_webhook.0';
        $this->client->webhooks->createWebhook(
            new CreateWebhookRequest([
                'events' => [
                    CreateWebhookRequestEventsItem::Sent->value,
                ],
                'url' => 'http://requestb.in/173lyyx1',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.create_webhook.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/webhooks",
            null,
            1
        );
    }

    /**
     */
    public function testExportWebhooksHistory(): void {
        $testId = 'webhooks.export_webhooks_history.0';
        $this->client->webhooks->exportWebhooksHistory(
            new ExportWebhooksHistoryRequest([
                'event' => ExportWebhooksHistoryRequestEvent::InvalidParameter->value,
                'notifyUrl' => 'https://brevo.com',
                'type' => ExportWebhooksHistoryRequestType::Transactional->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.export_webhooks_history.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/webhooks/export",
            null,
            1
        );
    }

    /**
     */
    public function testGetWebhook(): void {
        $testId = 'webhooks.get_webhook.0';
        $this->client->webhooks->getWebhook(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.get_webhook.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/webhooks/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateWebhook(): void {
        $testId = 'webhooks.update_webhook.0';
        $this->client->webhooks->updateWebhook(
            1000000,
            new UpdateWebhookRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.update_webhook.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/webhooks/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteWebhook(): void {
        $testId = 'webhooks.delete_webhook.0';
        $this->client->webhooks->deleteWebhook(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'webhooks.delete_webhook.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/webhooks/1000000",
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
