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
use Brevo\TransactionalEmails\Requests\DeleteSmtpLogIdentifierRequest;
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
     * Retrieve a paginated list of transactional contacts that have been blocked or unsubscribed, along with the reason for blocking (e.g. hard bounce, admin blocked, spam complaint, or unsubscription via email/API/Marketing Automation). Both `startDate` and `endDate` must be provided together when filtering by date range, and neither date can be in the future. Results default to 50 per page (max 100) and are sorted in descending order of record creation unless overridden with the `sort` parameter.
     *
     * @param GetTransacBlockedContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetTransacBlockedContactsResponse
     */
    public function getTransacBlockedContacts(GetTransacBlockedContactsRequest $request = new GetTransacBlockedContactsRequest(), ?array $options = null): ?GetTransacBlockedContactsResponse;

    /**
     * Unblock or resubscribe a transactional contact by removing their email address from the blacklist. The email address must be URL-encoded in the path parameter and must be a valid email format. If the contact is not found in the blocklist, a 404 error is returned.
     *
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
     * @return ?GetBlockedDomainsResponse
     */
    public function getBlockedDomains(?array $options = null): ?GetBlockedDomainsResponse;

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
     * Send a transactional email to one or more recipients, either using inline HTML content or a pre-built template via `templateId`. You can schedule emails for future delivery using `scheduledAt` (UTC, up to 5-minute delay), send multiple personalized versions with `messageVersions` (max 2000 total recipients, 99 per version), and attach files via URL or base64-encoded content. A `sender` and `subject` are required when no `templateId` is provided; when a `templateId` is used, the template''s sender and subject are applied unless overridden.
     *
     * @param SendTransacEmailRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SendTransacEmailResponse
     */
    public function sendTransacEmail(SendTransacEmailRequest $request = new SendTransacEmailRequest(), ?array $options = null): ?SendTransacEmailResponse;

    /**
     * Delete scheduled batch of emails by batchId or single scheduled email by messageId
     *
     * @param string $identifier The `batchId` of scheduled emails batch (must be a valid UUIDv4) or the `messageId` of scheduled email (enclosed in angle brackets with @ sign, e.g. `<...@domain>`).
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
     * @param string $identifier The `batchId` of scheduled emails batch (must be a valid UUIDv4) or the `messageId` of scheduled email (enclosed in angle brackets with @ sign, e.g. `<...@domain>`). When using `messageId`, the `limit`, `offset`, `sort`, and `status` query parameters are ignored.
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
     * )|null
     */
    public function getScheduledEmailById(string $identifier, GetScheduledEmailByIdRequest $request = new GetScheduledEmailByIdRequest(), ?array $options = null): GetScheduledEmailByIdResponseBatches|GetScheduledEmailByIdResponseCreatedAt|null;

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
     * @return ?GetTransacEmailsListResponse
     */
    public function getTransacEmailsList(GetTransacEmailsListRequest $request = new GetTransacEmailsListRequest(), ?array $options = null): ?GetTransacEmailsListResponse;

    /**
     * <Note title="How to get uuid">You can get the uuid using either of the following methods:
     * Send a GET request to https://api.brevo.com/v3/smtp/emails and pass the message_id in the url. Use your api-key to authenticate the request and you will get your uuid as a response.
     * The uuid can also be fetched from the transactional logs page in your Brevo account, from the address URL.</Note>
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
     * @return ?GetTransacEmailContentResponse
     */
    public function getTransacEmailContent(string $uuid, ?array $options = null): ?GetTransacEmailContentResponse;

    /**
     * Delete SMTP transactional log entries identified by a message ID (enclosed in angle brackets with an @ sign) or a valid email address. Optionally narrow the deletion to a specific date range using `from_date` and `to_date` query parameters (YYYY-MM-DD format). The operation also removes any associated stored email preview content.
     *
     * @param string $identifier MessageId or email address of the transactional log(s) to delete. Must be a valid message ID (enclosed in angle brackets with @ sign) or a valid email address.
     * @param DeleteSmtpLogIdentifierRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAnSmtpTransactionalLog(string $identifier, DeleteSmtpLogIdentifierRequest $request = new DeleteSmtpLogIdentifierRequest(), ?array $options = null): void;

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
     * @return ?GetAggregatedSmtpReportResponse
     */
    public function getAggregatedSmtpReport(GetAggregatedSmtpReportRequest $request = new GetAggregatedSmtpReportRequest(), ?array $options = null): ?GetAggregatedSmtpReportResponse;

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
     * @return ?GetEmailEventReportResponse
     */
    public function getEmailEventReport(GetEmailEventReportRequest $request = new GetEmailEventReportRequest(), ?array $options = null): ?GetEmailEventReportResponse;

    /**
     * This endpoint will show the aggregated stats per day for the past 10 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 30 days.
     *
     * @param GetSmtpReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpReportResponse
     */
    public function getSmtpReport(GetSmtpReportRequest $request = new GetSmtpReportRequest(), ?array $options = null): ?GetSmtpReportResponse;

    /**
     * Generate a fully rendered preview of a transactional email template by resolving dynamic variables. Provide either an `email` address (to populate variables from the contact''s attributes) or a `params` object with key-value pairs for manual substitution; at least one of these is required alongside the mandatory `templateId`. The response includes the rendered HTML, subject, sender details, preview text, and any feed names used in the template.
     *
     * @param (
     *    mixed
     * ) $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostPreviewSmtpEmailTemplatesResponse
     */
    public function postPreviewSmtpEmailTemplates(mixed $request, ?array $options = null): ?PostPreviewSmtpEmailTemplatesResponse;

    /**
     * Retrieve a paginated list of all transactional email templates (including automation templates) with their details such as name, subject, sender, status, HTML content, and timestamps. Results default to 50 per page (max 1000) and are sorted in descending creation order unless overridden. You can filter by active/inactive status using `templateStatus` and by editor type using `editorType` (currently only `richTextEditor` is supported).
     *
     * @param GetSmtpTemplatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpTemplatesResponse
     */
    public function getSmtpTemplates(GetSmtpTemplatesRequest $request = new GetSmtpTemplatesRequest(), ?array $options = null): ?GetSmtpTemplatesResponse;

    /**
     * Create a new transactional email template with the specified sender, subject, and content. The `sender`, `subject`, and `templateName` fields are required. Template content can be provided via `htmlContent` (minimum 10 characters) or `htmlUrl`; at least one must be supplied. Templates are created as inactive by default unless `isActive` is explicitly set to `true`.
     *
     * @param CreateSmtpTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateSmtpTemplateResponse
     */
    public function createSmtpTemplate(CreateSmtpTemplateRequest $request, ?array $options = null): ?CreateSmtpTemplateResponse;

    /**
     * Retrieve the full details of a specific transactional email template by its numeric ID or custom template identifier string. The response includes the template name, subject, sender information, HTML content, active status, creation and modification timestamps, reply-to address, tag, and a `doiTemplate` flag indicating whether the template is a double opt-in template (detected by the presence of optin-related tags or variables in the content).
     *
     * @param (
     *    int
     *   |string
     * ) $templateId ID of the template. Can be a numeric template ID or a custom template identifier string (alphanumeric, hyphens, and underscores only, max 64 characters, must start with a letter).
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmtpTemplateOverview
     */
    public function getSmtpTemplate(int|string $templateId, ?array $options = null): ?GetSmtpTemplateOverview;

    /**
     * Update an existing transactional email template by its numeric ID or custom template identifier string. All fields in the request body are optional; only the provided fields will be updated. You can update the template name, subject, sender, reply-to address, HTML content (via `htmlContent` or `htmlUrl`), active status, tag, attachment URL, and the personalized `toField`. Only one of sender email or sender ID should be provided per request.
     *
     * @param (
     *    int
     *   |string
     * ) $templateId ID of the template. Can be a numeric template ID or a custom template identifier string.
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
    public function updateSmtpTemplate(int|string $templateId, UpdateSmtpTemplateRequest $request = new UpdateSmtpTemplateRequest(), ?array $options = null): void;

    /**
     * Permanently delete a transactional email template by its numeric ID. Only inactive templates can be deleted; attempting to delete an active template returns a 405 error. To deactivate a template before deletion, use `PUT /smtp/templates/{templateId}` with `isActive` set to `false`. Deletion also removes associated newsletter template data and triggers asynchronous cleanup of shared assets.
     *
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
     * Send a test email of the specified transactional template to one or more recipients. Provide an array of email addresses in the `emailTo` field; if left empty, the test mail is sent to your entire test list. You can send a maximum of 50 test emails per day, and all provided email addresses must be valid.
     *
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
