<?php

namespace Brevo\SmsCampaigns;

use Brevo\SmsCampaigns\Requests\GetSmsCampaignsRequest;
use Brevo\SmsCampaigns\Types\GetSmsCampaignsResponse;
use Brevo\SmsCampaigns\Requests\CreateSmsCampaignRequest;
use Brevo\SmsCampaigns\Types\CreateSmsCampaignResponse;
use Brevo\SmsCampaigns\Types\GetSmsCampaignResponse;
use Brevo\SmsCampaigns\Requests\UpdateSmsCampaignRequest;
use Brevo\SmsCampaigns\Requests\RequestSmsRecipientExportRequest;
use Brevo\SmsCampaigns\Types\RequestSmsRecipientExportResponse;
use Brevo\SmsCampaigns\Requests\SendSmsReportRequest;
use Brevo\SmsCampaigns\Requests\SendTestSmsRequest;
use Brevo\SmsCampaigns\Requests\UpdateSmsCampaignStatusRequest;

interface SmsCampaignsClientInterface
{
    /**
     * Retrieve a paginated list of all your SMS campaigns with their statistics and recipient information. Results can be filtered by status and date range, with a default limit of 500 and maximum of 1000 per page. The sort order defaults to descending by creation date; date filters are only available when status is not passed or is set to sent.
     *
     * @param GetSmsCampaignsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmsCampaignsResponse
     */
    public function getSmsCampaigns(GetSmsCampaignsRequest $request = new GetSmsCampaignsRequest(), ?array $options = null): ?GetSmsCampaignsResponse;

    /**
     * Create a new SMS campaign with the required name, sender, and content fields. The sender name is limited to 11 alphanumeric characters or 15 numeric characters, and the content should stay within 160 characters per SMS segment. If a scheduledAt date is provided, listIds in recipients become mandatory; accounts under validation are limited to 4 total campaigns and campaigns with more than 10 recipients will be saved as draft.
     *
     * @param CreateSmsCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateSmsCampaignResponse
     */
    public function createSmsCampaign(CreateSmsCampaignRequest $request, ?array $options = null): ?CreateSmsCampaignResponse;

    /**
     * Retrieve detailed information about a specific SMS campaign by its ID, including campaign content, sender, recipients with list names, statistics (delivered, sent, bounces, unsubscriptions, answered), and tags. Unlike the list endpoint, recipients are returned as objects with id and name fields rather than plain IDs.
     *
     * @param int $campaignId id of the SMS campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSmsCampaignResponse
     */
    public function getSmsCampaign(int $campaignId, ?array $options = null): ?GetSmsCampaignResponse;

    /**
     * Update an existing SMS campaign''s properties such as name, sender, content, recipients, scheduled date, organisation prefix, and unsubscribe instructions. The request body must contain at least one valid field to update. The campaign must exist and must be of type SMS; if a scheduledAt is provided, valid recipients must be present either in the request or already configured on the campaign.
     *
     * @param int $campaignId id of the SMS campaign
     * @param UpdateSmsCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSmsCampaign(int $campaignId, UpdateSmsCampaignRequest $request = new UpdateSmsCampaignRequest(), ?array $options = null): void;

    /**
     * Delete an SMS campaign by its campaign ID. Only campaigns that have not been scheduled or sent can be deleted; attempting to delete a campaign that is queued, in process, or has been sent with recipients will return a 403 permission denied error.
     *
     * @param int $campaignId id of the SMS campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteSmsCampaign(int $campaignId, ?array $options = null): void;

    /**
     * It returns the background process ID which on completion calls the notify URL that you have set in the input.
     *
     * @param int $campaignId id of the campaign
     * @param RequestSmsRecipientExportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RequestSmsRecipientExportResponse
     */
    public function requestSmsRecipientExport(int $campaignId, RequestSmsRecipientExportRequest $request, ?array $options = null): ?RequestSmsRecipientExportResponse;

    /**
     * Send an existing SMS campaign immediately by scheduling it for the current time. The system verifies your account''s SMS credit balance before dispatching; if credits are insufficient or the remaining credit is less than the number of recipients, a 402 error is returned. The campaign must have valid recipients and content already configured.
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
    public function sendSmsCampaignNow(int $campaignId, ?array $options = null): void;

    /**
     * Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.
     *
     * @param int $campaignId id of the campaign
     * @param SendSmsReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendSmsReport(int $campaignId, SendSmsReportRequest $request, ?array $options = null): void;

    /**
     * Send a test SMS to a specified phone number to preview the campaign before sending it to all recipients. The phone number must belong to one of your existing contacts in your Brevo account and must not be blacklisted. The number should include the country code (e.g. 33689965433).
     *
     * @param int $campaignId Id of the SMS campaign
     * @param SendTestSmsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function sendTestSms(int $campaignId, SendTestSmsRequest $request = new SendTestSmsRequest(), ?array $options = null): void;

    /**
     * Update the status of an SMS campaign, such as suspending, archiving, or replicating it. Available status values include suspended, archive, darchive, sent, queued, replicate, replicateTemplate, cancel, and draft. Note that the replicateTemplate status is only available for template type campaigns.
     *
     * @param int $campaignId id of the campaign
     * @param UpdateSmsCampaignStatusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSmsCampaignStatus(int $campaignId, UpdateSmsCampaignStatusRequest $request, ?array $options = null): void;
}
