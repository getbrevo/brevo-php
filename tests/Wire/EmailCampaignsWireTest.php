<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\EmailCampaigns\Requests\GetEmailCampaignsRequest;
use Brevo\EmailCampaigns\Requests\CreateEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignRequestSender;
use Brevo\EmailCampaigns\Requests\UploadImageToGalleryRequest;
use Brevo\EmailCampaigns\Requests\GetEmailCampaignRequest;
use Brevo\EmailCampaigns\Requests\UpdateEmailCampaignRequest;
use Brevo\EmailCampaigns\Requests\EmailExportRecipientsRequest;
use Brevo\EmailCampaigns\Types\EmailExportRecipientsRequestRecipientsType;
use Brevo\EmailCampaigns\Requests\SendReportRequest;
use Brevo\Types\SendReport;
use Brevo\Types\SendReportEmail;
use Brevo\EmailCampaigns\Requests\SendTestEmailRequest;
use Brevo\Types\SendTestEmail;
use Brevo\EmailCampaigns\Requests\UpdateCampaignStatusRequest;
use Brevo\Types\UpdateCampaignStatus;

class EmailCampaignsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetEmailCampaigns(): void {
        $testId = 'email_campaigns.get_email_campaigns.0';
        $this->client->emailCampaigns->getEmailCampaigns(
            new GetEmailCampaignsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.get_email_campaigns.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/emailCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testCreateEmailCampaign(): void {
        $testId = 'email_campaigns.create_email_campaign.0';
        $this->client->emailCampaigns->createEmailCampaign(
            new CreateEmailCampaignRequest([
                'name' => 'Newsletter - May 2017',
                'sender' => new CreateEmailCampaignRequestSender([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.create_email_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns",
            null,
            1
        );
    }

    /**
     */
    public function testUploadImageToGallery(): void {
        $testId = 'email_campaigns.upload_image_to_gallery.0';
        $this->client->emailCampaigns->uploadImageToGallery(
            new UploadImageToGalleryRequest([
                'imageUrl' => 'https://somedomain.com/image1.jpg',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.upload_image_to_gallery.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns/images",
            null,
            1
        );
    }

    /**
     */
    public function testGetEmailCampaign(): void {
        $testId = 'email_campaigns.get_email_campaign.0';
        $this->client->emailCampaigns->getEmailCampaign(
            1000000,
            new GetEmailCampaignRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.get_email_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/emailCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateEmailCampaign(): void {
        $testId = 'email_campaigns.update_email_campaign.0';
        $this->client->emailCampaigns->updateEmailCampaign(
            1000000,
            new UpdateEmailCampaignRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.update_email_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/emailCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteEmailCampaign(): void {
        $testId = 'email_campaigns.delete_email_campaign.0';
        $this->client->emailCampaigns->deleteEmailCampaign(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.delete_email_campaign.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/emailCampaigns/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testGetAbTestCampaignResult(): void {
        $testId = 'email_campaigns.get_ab_test_campaign_result.0';
        $this->client->emailCampaigns->getAbTestCampaignResult(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.get_ab_test_campaign_result.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/emailCampaigns/1000000/abTestCampaignResult",
            null,
            1
        );
    }

    /**
     */
    public function testEmailExportRecipients(): void {
        $testId = 'email_campaigns.email_export_recipients.0';
        $this->client->emailCampaigns->emailExportRecipients(
            1000000,
            new EmailExportRecipientsRequest([
                'recipientsType' => EmailExportRecipientsRequestRecipientsType::All->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.email_export_recipients.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns/1000000/exportRecipients",
            null,
            1
        );
    }

    /**
     */
    public function testSendEmailCampaignNow(): void {
        $testId = 'email_campaigns.send_email_campaign_now.0';
        $this->client->emailCampaigns->sendEmailCampaignNow(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.send_email_campaign_now.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns/1000000/sendNow",
            null,
            1
        );
    }

    /**
     */
    public function testSendReport(): void {
        $testId = 'email_campaigns.send_report.0';
        $this->client->emailCampaigns->sendReport(
            1000000,
            new SendReportRequest([
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
                    'X-Test-Id' => 'email_campaigns.send_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns/1000000/sendReport",
            null,
            1
        );
    }

    /**
     */
    public function testSendTestEmail(): void {
        $testId = 'email_campaigns.send_test_email.0';
        $this->client->emailCampaigns->sendTestEmail(
            1000000,
            new SendTestEmailRequest([
                'body' => new SendTestEmail([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.send_test_email.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/emailCampaigns/1000000/sendTest",
            null,
            1
        );
    }

    /**
     */
    public function testGetSharedTemplateUrl(): void {
        $testId = 'email_campaigns.get_shared_template_url.0';
        $this->client->emailCampaigns->getSharedTemplateUrl(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.get_shared_template_url.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/emailCampaigns/1000000/sharedUrl",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateCampaignStatus(): void {
        $testId = 'email_campaigns.update_campaign_status.0';
        $this->client->emailCampaigns->updateCampaignStatus(
            1000000,
            new UpdateCampaignStatusRequest([
                'body' => new UpdateCampaignStatus([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'email_campaigns.update_campaign_status.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/emailCampaigns/1000000/status",
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
