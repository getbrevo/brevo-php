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
     * @param GetSmsCampaignsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmsCampaignsResponse
     */
    public function getSmsCampaigns(GetSmsCampaignsRequest $request = new GetSmsCampaignsRequest(), ?array $options = null): GetSmsCampaignsResponse;

    /**
     * @param CreateSmsCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateSmsCampaignResponse
     */
    public function createSmsCampaign(CreateSmsCampaignRequest $request, ?array $options = null): CreateSmsCampaignResponse;

    /**
     * @param int $campaignId id of the SMS campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmsCampaignResponse
     */
    public function getSmsCampaign(int $campaignId, ?array $options = null): GetSmsCampaignResponse;

    /**
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
     * @return RequestSmsRecipientExportResponse
     */
    public function requestSmsRecipientExport(int $campaignId, RequestSmsRecipientExportRequest $request, ?array $options = null): RequestSmsRecipientExportResponse;

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
