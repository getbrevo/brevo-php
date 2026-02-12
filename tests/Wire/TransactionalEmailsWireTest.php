<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\TransactionalEmails\Requests\GetTransacBlockedContactsRequest;
use Brevo\TransactionalEmails\Requests\BlockNewDomainRequest;
use Brevo\TransactionalEmails\Requests\DeleteHardbouncesRequest;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;
use Brevo\TransactionalEmails\Requests\GetScheduledEmailByIdRequest;
use DateTime;
use Brevo\TransactionalEmails\Requests\GetTransacEmailsListRequest;
use Brevo\TransactionalEmails\Requests\GetAggregatedSmtpReportRequest;
use Brevo\TransactionalEmails\Requests\GetEmailEventReportRequest;
use Brevo\TransactionalEmails\Requests\GetSmtpReportRequest;
use Brevo\TransactionalEmails\Requests\GetSmtpTemplatesRequest;
use Brevo\TransactionalEmails\Requests\CreateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Types\CreateSmtpTemplateRequestSender;
use Brevo\TransactionalEmails\Requests\UpdateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Requests\SendTestTemplateRequest;
use Brevo\Types\SendTestEmail;

class TransactionalEmailsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetTransacBlockedContacts(): void {
        $testId = 'transactional_emails.get_transac_blocked_contacts.0';
        $this->client->transactionalEmails->getTransacBlockedContacts(
            new GetTransacBlockedContactsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_transac_blocked_contacts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/blockedContacts",
            null,
            1
        );
    }

    /**
     */
    public function testUnblockOrResubscribeATransactionalContact(): void {
        $testId = 'transactional_emails.unblock_or_resubscribe_a_transactional_contact.0';
        $this->client->transactionalEmails->unblockOrResubscribeATransactionalContact(
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.unblock_or_resubscribe_a_transactional_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smtp/blockedContacts/email",
            null,
            1
        );
    }

    /**
     */
    public function testGetBlockedDomains(): void {
        $testId = 'transactional_emails.get_blocked_domains.0';
        $this->client->transactionalEmails->getBlockedDomains(
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_blocked_domains.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/blockedDomains",
            null,
            1
        );
    }

    /**
     */
    public function testBlockNewDomain(): void {
        $testId = 'transactional_emails.block_new_domain.0';
        $this->client->transactionalEmails->blockNewDomain(
            new BlockNewDomainRequest([
                'domain' => 'example.com',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.block_new_domain.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/blockedDomains",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteBlockedDomain(): void {
        $testId = 'transactional_emails.delete_blocked_domain.0';
        $this->client->transactionalEmails->deleteBlockedDomain(
            'domain',
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.delete_blocked_domain.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smtp/blockedDomains/domain",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteHardbounces(): void {
        $testId = 'transactional_emails.delete_hardbounces.0';
        $this->client->transactionalEmails->deleteHardbounces(
            new DeleteHardbouncesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.delete_hardbounces.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/deleteHardbounces",
            null,
            1
        );
    }

    /**
     */
    public function testSendTransacEmail(): void {
        $testId = 'transactional_emails.send_transac_email.0';
        $this->client->transactionalEmails->sendTransacEmail(
            new SendTransacEmailRequest([
                'htmlContent' => '<html><head></head><body><p>Hello,</p>This is my first transactional email sent from Brevo.</p></body></html>',
                'sender' => new SendTransacEmailRequestSender([
                    'email' => 'hello@brevo.com',
                    'name' => 'Alex from Brevo',
                ]),
                'subject' => 'Hello from Brevo!',
                'to' => [
                    new SendTransacEmailRequestToItem([
                        'email' => 'johndoe@example.com',
                        'name' => 'John Doe',
                    ]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.send_transac_email.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/email",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteScheduledEmailById(): void {
        $testId = 'transactional_emails.delete_scheduled_email_by_id.0';
        $this->client->transactionalEmails->deleteScheduledEmailById(
            '4320f270-a4e3-4a2e-b591-edfe30a5e627',
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.delete_scheduled_email_by_id.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smtp/email/4320f270-a4e3-4a2e-b591-edfe30a5e627",
            null,
            1
        );
    }

    /**
     */
    public function testGetScheduledEmailById(): void {
        $testId = 'transactional_emails.get_scheduled_email_by_id.0';
        $this->client->transactionalEmails->getScheduledEmailById(
            '4320f270-a4e3-4a2e-b591-edfe30a5e627',
            new GetScheduledEmailByIdRequest([
                'startDate' => new DateTime('2022-02-02'),
                'endDate' => new DateTime('2022-03-02'),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_scheduled_email_by_id.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/emailStatus/4320f270-a4e3-4a2e-b591-edfe30a5e627",
            ['startDate' => '2022-02-02', 'endDate' => '2022-03-02'],
            1
        );
    }

    /**
     */
    public function testGetTransacEmailsList(): void {
        $testId = 'transactional_emails.get_transac_emails_list.0';
        $this->client->transactionalEmails->getTransacEmailsList(
            new GetTransacEmailsListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_transac_emails_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/emails",
            null,
            1
        );
    }

    /**
     */
    public function testGetTransacEmailContent(): void {
        $testId = 'transactional_emails.get_transac_email_content.0';
        $this->client->transactionalEmails->getTransacEmailContent(
            'uuid',
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_transac_email_content.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/emails/uuid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAnSmtpTransactionalLog(): void {
        $testId = 'transactional_emails.delete_an_smtp_transactional_log.0';
        $this->client->transactionalEmails->deleteAnSmtpTransactionalLog(
            'identifier',
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.delete_an_smtp_transactional_log.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smtp/log/identifier",
            null,
            1
        );
    }

    /**
     */
    public function testGetAggregatedSmtpReport(): void {
        $testId = 'transactional_emails.get_aggregated_smtp_report.0';
        $this->client->transactionalEmails->getAggregatedSmtpReport(
            new GetAggregatedSmtpReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_aggregated_smtp_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/statistics/aggregatedReport",
            null,
            1
        );
    }

    /**
     */
    public function testGetEmailEventReport(): void {
        $testId = 'transactional_emails.get_email_event_report.0';
        $this->client->transactionalEmails->getEmailEventReport(
            new GetEmailEventReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_email_event_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/statistics/events",
            null,
            1
        );
    }

    /**
     */
    public function testGetSmtpReport(): void {
        $testId = 'transactional_emails.get_smtp_report.0';
        $this->client->transactionalEmails->getSmtpReport(
            new GetSmtpReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_smtp_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/statistics/reports",
            null,
            1
        );
    }

    /**
     */
    public function testPostPreviewSmtpEmailTemplates(): void {
        $testId = 'transactional_emails.post_preview_smtp_email_templates.0';
        $this->client->transactionalEmails->postPreviewSmtpEmailTemplates(
            [
                'key' => "value",
            ],
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.post_preview_smtp_email_templates.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/template/preview",
            null,
            1
        );
    }

    /**
     */
    public function testGetSmtpTemplates(): void {
        $testId = 'transactional_emails.get_smtp_templates.0';
        $this->client->transactionalEmails->getSmtpTemplates(
            new GetSmtpTemplatesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_smtp_templates.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/templates",
            null,
            1
        );
    }

    /**
     */
    public function testCreateSmtpTemplate(): void {
        $testId = 'transactional_emails.create_smtp_template.0';
        $this->client->transactionalEmails->createSmtpTemplate(
            new CreateSmtpTemplateRequest([
                'sender' => new CreateSmtpTemplateRequestSender([]),
                'subject' => 'Thanks for your purchase !',
                'templateName' => 'Order Confirmation - EN',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.create_smtp_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/templates",
            null,
            1
        );
    }

    /**
     */
    public function testGetSmtpTemplate(): void {
        $testId = 'transactional_emails.get_smtp_template.0';
        $this->client->transactionalEmails->getSmtpTemplate(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.get_smtp_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/smtp/templates/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSmtpTemplate(): void {
        $testId = 'transactional_emails.update_smtp_template.0';
        $this->client->transactionalEmails->updateSmtpTemplate(
            1000000,
            new UpdateSmtpTemplateRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.update_smtp_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/smtp/templates/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteSmtpTemplate(): void {
        $testId = 'transactional_emails.delete_smtp_template.0';
        $this->client->transactionalEmails->deleteSmtpTemplate(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.delete_smtp_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/smtp/templates/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testSendTestTemplate(): void {
        $testId = 'transactional_emails.send_test_template.0';
        $this->client->transactionalEmails->sendTestTemplate(
            1000000,
            new SendTestTemplateRequest([
                'body' => new SendTestEmail([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_emails.send_test_template.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/smtp/templates/1000000/sendTest",
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
