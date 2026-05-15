<?php

namespace Brevo\EmailCampaigns;

use Brevo\EmailCampaigns\Requests\GetEmailCampaignsRequest;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsResponse;
use Brevo\EmailCampaigns\Requests\CreateEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignResponse;
use Brevo\EmailCampaigns\Requests\UploadImageToGalleryRequest;
use Brevo\EmailCampaigns\Types\UploadImageToGalleryResponse;
use Brevo\EmailCampaigns\Requests\GetEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\GetEmailCampaignResponse;
use Brevo\EmailCampaigns\Requests\UpdateEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\GetAbTestCampaignResultResponse;
use Brevo\EmailCampaigns\Requests\EmailExportRecipientsRequest;
use Brevo\EmailCampaigns\Types\EmailExportRecipientsResponse;
use Brevo\EmailCampaigns\Requests\SendReportRequest;
use Brevo\EmailCampaigns\Requests\SendTestEmailRequest;
use Brevo\EmailCampaigns\Types\GetSharedTemplateUrlResponse;
use Brevo\EmailCampaigns\Requests\UpdateCampaignStatusRequest;

interface EmailCampaignsClientInterface
{
    /**
     * <Note>The response payload for this endpoint has changed
     * You now need to specify which type of statistics you would like to retrieve. For more information visit [this page](https://developers.brevo.com/changelog/2023/2/7).</Note>
     *
     * @param GetEmailCampaignsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEmailCampaignsResponse
     */
    public function getEmailCampaigns(GetEmailCampaignsRequest $request = new GetEmailCampaignsRequest(), ?array $options = null): ?GetEmailCampaignsResponse;

    /**
     * Create a new email campaign. The campaign requires at minimum a name and sender details, and is created in draft status by default. You must provide email content via one of three mutually exclusive options: htmlContent (inline HTML), htmlUrl (remote URL), or templateId (existing template); additionally, A/B testing can be enabled by setting abTesting to true with subjectA and subjectB, but this is incompatible with sendAtBestTime.
     *
     * @param CreateEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateEmailCampaignResponse
     */
    public function createEmailCampaign(CreateEmailCampaignRequest $request, ?array $options = null): ?CreateEmailCampaignResponse;

    /**
     * Upload an image to your account''s image gallery by providing an absolute URL to the image. The maximum allowed image size is 2MB and supported formats are jpeg, jpg, png, bmp, and gif; local file uploads are not supported.
     *
     * @param UploadImageToGalleryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UploadImageToGalleryResponse
     */
    public function uploadImageToGallery(UploadImageToGalleryRequest $request, ?array $options = null): ?UploadImageToGalleryResponse;

    /**
     * Retrieve detailed information about a specific email campaign by its ID, including recipients, statistics, and HTML content. Use the statistics query parameter to select which statistics to include (globalStats, linksStats, statsByDomain, statsByDevice, or statsByBrowser); statsByDevice and statsByBrowser are only available on this single-campaign endpoint. You can exclude HTML content from the response by setting excludeHtmlContent to true.
     *
     * @param int $campaignId Id of the campaign
     * @param GetEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEmailCampaignResponse
     */
    public function getEmailCampaign(int $campaignId, GetEmailCampaignRequest $request = new GetEmailCampaignRequest(), ?array $options = null): ?GetEmailCampaignResponse;

    /**
     * Update an existing email campaign''s properties such as name, subject, content, sender, recipients, schedule, and A/B testing configuration. The campaign must exist and the request body must contain at least one valid field to update. Only draft or scheduled campaigns can be modified; if sendAtBestTime is enabled, IP warmup will be automatically disabled.
     *
     * @param int $campaignId Id of the campaign
     * @param UpdateEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateEmailCampaign(int $campaignId, UpdateEmailCampaignRequest $request = new UpdateEmailCampaignRequest(), ?array $options = null): void;

    /**
     * Delete an email campaign by its campaign ID. Only campaigns that have not been scheduled can be deleted; attempting to delete a campaign that has already been scheduled will return a 403 permission denied error. Related data in templates, newsletter builder, and schedule collections is also cleaned up.
     *
     * @param int $campaignId id of the campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteEmailCampaign(int $campaignId, ?array $options = null): void;

    /**
     * Obtain winning version of an A/B test email campaign
     *
     * @param int $campaignId Id of the A/B test campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAbTestCampaignResultResponse
     */
    public function getAbTestCampaignResult(int $campaignId, ?array $options = null): ?GetAbTestCampaignResultResponse;

    /**
     * Export the recipients of a sent email campaign as an asynchronous process, filtered by recipient type (e.g. openers, clickers, hardBounces). The recipientsType field is required and determines which subset of recipients to export. An optional notifyURL webhook will be called once the export is complete, and the response returns a processId to track the export status.
     *
     * @param int $campaignId Id of the campaign
     * @param EmailExportRecipientsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EmailExportRecipientsResponse
     */
    public function emailExportRecipients(int $campaignId, EmailExportRecipientsRequest $request, ?array $options = null): ?EmailExportRecipientsResponse;

    /**
     * Send an existing email campaign immediately by scheduling it for the current time. The campaign must have valid recipients and content configured before sending. The system verifies your account''s send limit and credit balance before dispatching; if credits are insufficient, a 402 error is returned.
     *
     * @param int $campaignId Id of the campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendEmailCampaignNow(int $campaignId, ?array $options = null): void;

    /**
     * A PDF will be sent to the specified email addresses
     *
     * @param int $campaignId Id of the campaign
     * @param SendReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendReport(int $campaignId, SendReportRequest $request, ?array $options = null): void;

    /**
     * Send a test version of an email campaign to specified email addresses or your entire test list. If the emailTo array is left empty, the test mail will be sent to all addresses in your test list. You can send a maximum of 50 test emails per day.
     *
     * @param int $campaignId Id of the campaign
     * @param SendTestEmailRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendTestEmail(int $campaignId, SendTestEmailRequest $request, ?array $options = null): void;

    /**
     * Get a unique URL to share & import an email template from one Brevo account to another.
     *
     * @param int $campaignId Id of the campaign or template
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSharedTemplateUrlResponse
     */
    public function getSharedTemplateUrl(int $campaignId, ?array $options = null): ?GetSharedTemplateUrlResponse;

    /**
     * Update the status of an email campaign, such as suspending, archiving, or replicating it. Available status values include suspended, archive, darchive, sent, queued, replicate, replicateTemplate, cancel, and draft. Note that the replicateTemplate status is only available for template type campaigns.
     *
     * @param int $campaignId Id of the campaign
     * @param UpdateCampaignStatusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateCampaignStatus(int $campaignId, UpdateCampaignStatusRequest $request, ?array $options = null): void;
}
