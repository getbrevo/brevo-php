<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\WhatsAppCampaigns\Requests\GetWhatsAppCampaignsRequest;
use Brevo\WhatsAppCampaigns\Requests\CreateWhatsAppCampaignRequest;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppCampaignRequestRecipients;
use Brevo\WhatsAppCampaigns\Requests\CreateWhatsAppTemplateRequest;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppTemplateRequestCategory;
use Brevo\WhatsAppCampaigns\Requests\GetWhatsAppTemplatesRequest;
use Brevo\WhatsAppCampaigns\Requests\UpdateWhatsAppCampaignRequest;

class WhatsAppCampaignsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetWhatsAppCampaigns(): void {
        $testId = 'whats_app_campaigns.get_whats_app_campaigns.0';
        $this->client->whatsAppCampaigns->getWhatsAppCampaigns(
            new GetWhatsAppCampaignsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.get_whats_app_campaigns.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/whatsappCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testCreateWhatsAppCampaign(): void {
        $testId = 'whats_app_campaigns.create_whats_app_campaign.0';
        $this->client->whatsAppCampaigns->createWhatsAppCampaign(
            new CreateWhatsAppCampaignRequest([
                'name' => 'Test Campaign',
                'recipients' => new CreateWhatsAppCampaignRequestRecipients([]),
                'scheduledAt' => '2017-06-01T12:30:00+02:00',
                'templateId' => 19,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.create_whats_app_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/whatsappCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testGetWhatsAppConfig(): void {
        $testId = 'whats_app_campaigns.get_whats_app_config.0';
        $this->client->whatsAppCampaigns->getWhatsAppConfig(
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.get_whats_app_config.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/whatsappCampaigns/config",
            null,
            1
        );
    }

    /**
     */
    public function testCreateWhatsAppTemplate(): void {
        $testId = 'whats_app_campaigns.create_whats_app_template.0';
        $this->client->whatsAppCampaigns->createWhatsAppTemplate(
            new CreateWhatsAppTemplateRequest([
                'bodyText' => 'making it look like readable English',
                'category' => CreateWhatsAppTemplateRequestCategory::Marketing->value,
                'language' => 'en',
                'name' => 'Test template',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.create_whats_app_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/whatsappCampaigns/template",
            null,
            1
        );
    }

    /**
     */
    public function testGetWhatsAppTemplates(): void {
        $testId = 'whats_app_campaigns.get_whats_app_templates.0';
        $this->client->whatsAppCampaigns->getWhatsAppTemplates(
            new GetWhatsAppTemplatesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.get_whats_app_templates.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/whatsappCampaigns/template-list",
            null,
            1
        );
    }

    /**
     */
    public function testSendWhatsAppTemplateApproval(): void {
        $testId = 'whats_app_campaigns.send_whats_app_template_approval.0';
        $this->client->whatsAppCampaigns->sendWhatsAppTemplateApproval(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.send_whats_app_template_approval.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/whatsappCampaigns/template/approval/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testGetWhatsAppCampaign(): void {
        $testId = 'whats_app_campaigns.get_whats_app_campaign.0';
        $this->client->whatsAppCampaigns->getWhatsAppCampaign(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.get_whats_app_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/whatsappCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateWhatsAppCampaign(): void {
        $testId = 'whats_app_campaigns.update_whats_app_campaign.0';
        $this->client->whatsAppCampaigns->updateWhatsAppCampaign(
            1000000,
            new UpdateWhatsAppCampaignRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.update_whats_app_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/whatsappCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteWhatsAppCampaign(): void {
        $testId = 'whats_app_campaigns.delete_whats_app_campaign.0';
        $this->client->whatsAppCampaigns->deleteWhatsAppCampaign(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'whats_app_campaigns.delete_whats_app_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/whatsappCampaigns/1000000",
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
