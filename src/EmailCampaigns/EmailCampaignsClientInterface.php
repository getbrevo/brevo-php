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
     * <Note>
     * The response payload for this endpoint has changed
     *
     * You now need to specify which type of statistics you would like to retrieve. For more information visit [this page](https://developers.brevo.com/changelog/get-all-marketing-campaigns).
     * </Note>
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
     * @return GetEmailCampaignsResponse
     */
    public function getEmailCampaigns(GetEmailCampaignsRequest $request = new GetEmailCampaignsRequest(), ?array $options = null): GetEmailCampaignsResponse;

    /**
     * @param CreateEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateEmailCampaignResponse
     */
    public function createEmailCampaign(CreateEmailCampaignRequest $request, ?array $options = null): CreateEmailCampaignResponse;

    /**
     * @param UploadImageToGalleryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return UploadImageToGalleryResponse
     */
    public function uploadImageToGallery(UploadImageToGalleryRequest $request, ?array $options = null): UploadImageToGalleryResponse;

    /**
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
     * @return GetEmailCampaignResponse
     */
    public function getEmailCampaign(int $campaignId, GetEmailCampaignRequest $request = new GetEmailCampaignRequest(), ?array $options = null): GetEmailCampaignResponse;

    /**
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
     * @return GetAbTestCampaignResultResponse
     */
    public function getAbTestCampaignResult(int $campaignId, ?array $options = null): GetAbTestCampaignResultResponse;

    /**
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
     * @return EmailExportRecipientsResponse
     */
    public function emailExportRecipients(int $campaignId, EmailExportRecipientsRequest $request, ?array $options = null): EmailExportRecipientsResponse;

    /**
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
     * @return GetSharedTemplateUrlResponse
     */
    public function getSharedTemplateUrl(int $campaignId, ?array $options = null): GetSharedTemplateUrlResponse;

    /**
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
