<?php

namespace Brevo\TransactionalEmails;

use Brevo\TransactionalEmails\Requests\GetTransacBlockedContactsRequest;
use Brevo\TransactionalEmails\Types\GetTransacBlockedContactsResponse;
use Brevo\TransactionalEmails\Types\GetBlockedDomainsResponse;
use Brevo\TransactionalEmails\Requests\BlockNewDomainRequest;
use Brevo\TransactionalEmails\Requests\DeleteHardbouncesRequest;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailResponse;
use Brevo\TransactionalEmails\Requests\GetScheduledEmailByIdRequest;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdResponseBatches;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdResponseCreatedAt;
use Brevo\TransactionalEmails\Requests\GetTransacEmailsListRequest;
use Brevo\TransactionalEmails\Types\GetTransacEmailsListResponse;
use Brevo\TransactionalEmails\Types\GetTransacEmailContentResponse;
use Brevo\TransactionalEmails\Requests\GetAggregatedSmtpReportRequest;
use Brevo\TransactionalEmails\Types\GetAggregatedSmtpReportResponse;
use Brevo\TransactionalEmails\Requests\GetEmailEventReportRequest;
use Brevo\TransactionalEmails\Types\GetEmailEventReportResponse;
use Brevo\TransactionalEmails\Requests\GetSmtpReportRequest;
use Brevo\TransactionalEmails\Types\GetSmtpReportResponse;
use Brevo\TransactionalEmails\Types\PostPreviewSmtpEmailTemplatesResponse;
use Brevo\TransactionalEmails\Requests\GetSmtpTemplatesRequest;
use Brevo\TransactionalEmails\Types\GetSmtpTemplatesResponse;
use Brevo\TransactionalEmails\Requests\CreateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Types\CreateSmtpTemplateResponse;
use Brevo\Types\GetSmtpTemplateOverview;
use Brevo\TransactionalEmails\Requests\UpdateSmtpTemplateRequest;
use Brevo\TransactionalEmails\Requests\SendTestTemplateRequest;

interface TransactionalEmailsClientInterface
{
    /**
     * @param GetTransacBlockedContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetTransacBlockedContactsResponse
     */
    public function getTransacBlockedContacts(GetTransacBlockedContactsRequest $request = new GetTransacBlockedContactsRequest(), ?array $options = null): GetTransacBlockedContactsResponse;

    /**
     * @param string $email contact email (urlencoded) to unblock.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function unblockOrResubscribeATransactionalContact(string $email, ?array $options = null): void;

    /**
     * Get the list of blocked domains
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetBlockedDomainsResponse
     */
    public function getBlockedDomains(?array $options = null): GetBlockedDomainsResponse;

    /**
     * Blocks a new domain in order to avoid messages being sent to the same
     *
     * @param BlockNewDomainRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function blockNewDomain(BlockNewDomainRequest $request, ?array $options = null): void;

    /**
     * Unblocks an existing domain from the list of blocked domains
     *
     * @param string $domain The name of the domain to be deleted
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteBlockedDomain(string $domain, ?array $options = null): void;

    /**
     * Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)
     *
     * @param DeleteHardbouncesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteHardbounces(DeleteHardbouncesRequest $request = new DeleteHardbouncesRequest(), ?array $options = null): void;

    /**
     * @param SendTransacEmailRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SendTransacEmailResponse
     */
    public function sendTransacEmail(SendTransacEmailRequest $request = new SendTransacEmailRequest(), ?array $options = null): SendTransacEmailResponse;

    /**
     * Delete scheduled batch of emails by batchId or single scheduled email by messageId
     *
     * @param string $identifier The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteScheduledEmailById(string $identifier, ?array $options = null): void;

    /**
     * Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)
     *
     * @param string $identifier The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
     * @param GetScheduledEmailByIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return (
     *    GetScheduledEmailByIdResponseBatches
     *   |GetScheduledEmailByIdResponseCreatedAt
     * )
     */
    public function getScheduledEmailById(string $identifier, GetScheduledEmailByIdRequest $request = new GetScheduledEmailByIdRequest(), ?array $options = null): GetScheduledEmailByIdResponseBatches|GetScheduledEmailByIdResponseCreatedAt;

    /**
     * This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.
     *
     * @param GetTransacEmailsListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetTransacEmailsListResponse
     */
    public function getTransacEmailsList(GetTransacEmailsListRequest $request = new GetTransacEmailsListRequest(), ?array $options = null): GetTransacEmailsListResponse;

    /**
     * <Note title="How to get uuid?">
     * You can get the uuid using either of the following methods:
     *
     * Send a GET request to https://api.brevo.com/v3/smtp/emails and pass the message_id in the url. Use your api-key to authenticate the request and you will get your uuid as a response.
     *
     * The uuid can also be fetched from the transactional logs page in your Brevo account, from the address URL.
     * </Note>
     *
     * @param string $uuid Unique id of the transactional email that has been sent to a particular contact
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetTransacEmailContentResponse
     */
    public function getTransacEmailContent(string $uuid, ?array $options = null): GetTransacEmailContentResponse;

    /**
     * @param string $identifier MessageId of the transactional log(s) to delete
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAnSmtpTransactionalLog(string $identifier, ?array $options = null): void;

    /**
     * This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
     *
     * @param GetAggregatedSmtpReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAggregatedSmtpReportResponse
     */
    public function getAggregatedSmtpReport(GetAggregatedSmtpReportRequest $request = new GetAggregatedSmtpReportRequest(), ?array $options = null): GetAggregatedSmtpReportResponse;

    /**
     * This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
     *
     * @param GetEmailEventReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetEmailEventReportResponse
     */
    public function getEmailEventReport(GetEmailEventReportRequest $request = new GetEmailEventReportRequest(), ?array $options = null): GetEmailEventReportResponse;

    /**
     * @param GetSmtpReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmtpReportResponse
     */
    public function getSmtpReport(GetSmtpReportRequest $request = new GetSmtpReportRequest(), ?array $options = null): GetSmtpReportResponse;

    /**
     * @param mixed $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostPreviewSmtpEmailTemplatesResponse
     */
    public function postPreviewSmtpEmailTemplates(mixed $request, ?array $options = null): PostPreviewSmtpEmailTemplatesResponse;

    /**
     * @param GetSmtpTemplatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmtpTemplatesResponse
     */
    public function getSmtpTemplates(GetSmtpTemplatesRequest $request = new GetSmtpTemplatesRequest(), ?array $options = null): GetSmtpTemplatesResponse;

    /**
     * @param CreateSmtpTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateSmtpTemplateResponse
     */
    public function createSmtpTemplate(CreateSmtpTemplateRequest $request, ?array $options = null): CreateSmtpTemplateResponse;

    /**
     * @param int $templateId id of the template
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmtpTemplateOverview
     */
    public function getSmtpTemplate(int $templateId, ?array $options = null): GetSmtpTemplateOverview;

    /**
     * @param int $templateId id of the template
     * @param UpdateSmtpTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSmtpTemplate(int $templateId, UpdateSmtpTemplateRequest $request = new UpdateSmtpTemplateRequest(), ?array $options = null): void;

    /**
     * @param int $templateId id of the template
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteSmtpTemplate(int $templateId, ?array $options = null): void;

    /**
     * @param int $templateId Id of the template
     * @param SendTestTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendTestTemplate(int $templateId, SendTestTemplateRequest $request, ?array $options = null): void;
}
