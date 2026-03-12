<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\SmsCampaigns\Requests\GetSmsCampaignsRequest;
use Brevo\SmsCampaigns\Requests\CreateSmsCampaignRequest;
use Brevo\SmsCampaigns\Requests\UpdateSmsCampaignRequest;
use Brevo\SmsCampaigns\Requests\RequestSmsRecipientExportRequest;
use Brevo\SmsCampaigns\Types\RequestSmsRecipientExportRequestRecipientsType;
use Brevo\SmsCampaigns\Requests\SendSmsReportRequest;
use Brevo\Types\SendReport;
use Brevo\Types\SendReportEmail;
use Brevo\SmsCampaigns\Requests\SendTestSmsRequest;
use Brevo\SmsCampaigns\Requests\UpdateSmsCampaignStatusRequest;
use Brevo\Types\UpdateCampaignStatus;

class SmsCampaignsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetSmsCampaigns(): void {
        $testId = 'sms_campaigns.get_sms_campaigns.0';
        $this->client->smsCampaigns->getSmsCampaigns(
            new GetSmsCampaignsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.get_sms_campaigns.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smsCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testCreateSmsCampaign(): void {
        $testId = 'sms_campaigns.create_sms_campaign.0';
        $this->client->smsCampaigns->createSmsCampaign(
            new CreateSmsCampaignRequest([
                'content' => 'Get a discount by visiting our NY store and saying : Happy Spring!',
                'name' => 'Spring Promo Code',
                'sender' => 'MyShop',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.create_sms_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smsCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testGetSmsCampaign(): void {
        $testId = 'sms_campaigns.get_sms_campaign.0';
        $this->client->smsCampaigns->getSmsCampaign(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.get_sms_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smsCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSmsCampaign(): void {
        $testId = 'sms_campaigns.update_sms_campaign.0';
        $this->client->smsCampaigns->updateSmsCampaign(
            1000000,
            new UpdateSmsCampaignRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.update_sms_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/smsCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteSmsCampaign(): void {
        $testId = 'sms_campaigns.delete_sms_campaign.0';
        $this->client->smsCampaigns->deleteSmsCampaign(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.delete_sms_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smsCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testRequestSmsRecipientExport(): void {
        $testId = 'sms_campaigns.request_sms_recipient_export.0';
        $this->client->smsCampaigns->requestSmsRecipientExport(
            1000000,
            new RequestSmsRecipientExportRequest([
                'recipientsType' => RequestSmsRecipientExportRequestRecipientsType::All->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.request_sms_recipient_export.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smsCampaigns/1000000/exportRecipients",
            null,
            1
        );
    }

    /**
     */
    public function testSendSmsCampaignNow(): void {
        $testId = 'sms_campaigns.send_sms_campaign_now.0';
        $this->client->smsCampaigns->sendSmsCampaignNow(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.send_sms_campaign_now.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smsCampaigns/1000000/sendNow",
            null,
            1
        );
    }

    /**
     */
    public function testSendSmsReport(): void {
        $testId = 'sms_campaigns.send_sms_report.0';
        $this->client->smsCampaigns->sendSmsReport(
            1000000,
            new SendSmsReportRequest([
                'body' => new SendReport([
                    'email' => new SendReportEmail([
                        'body' => 'Please find attached the report of our last email campaign.',
                        'to' => [
                            'jim.suehan@example.com',
                        ],
                    ]),
                ]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.send_sms_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smsCampaigns/1000000/sendReport",
            null,
            1
        );
    }

    /**
     */
    public function testSendTestSms(): void {
        $testId = 'sms_campaigns.send_test_sms.0';
        $this->client->smsCampaigns->sendTestSms(
            1000000,
            new SendTestSmsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.send_test_sms.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smsCampaigns/1000000/sendTest",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSmsCampaignStatus(): void {
        $testId = 'sms_campaigns.update_sms_campaign_status.0';
        $this->client->smsCampaigns->updateSmsCampaignStatus(
            1000000,
            new UpdateSmsCampaignStatusRequest([
                'body' => new UpdateCampaignStatus([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'sms_campaigns.update_sms_campaign_status.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/smsCampaigns/1000000/status",
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
