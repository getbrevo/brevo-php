<?php

namespace Brevo\WhatsAppCampaigns;

use Brevo\WhatsAppCampaigns\Requests\GetWhatsAppCampaignsRequest;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppCampaignsResponse;
use Brevo\WhatsAppCampaigns\Requests\CreateWhatsAppCampaignRequest;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppCampaignResponse;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppConfigResponse;
use Brevo\WhatsAppCampaigns\Requests\CreateWhatsAppTemplateRequest;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppTemplateResponse;
use Brevo\WhatsAppCampaigns\Requests\GetWhatsAppTemplatesRequest;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppTemplatesResponse;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppCampaignResponse;
use Brevo\WhatsAppCampaigns\Requests\UpdateWhatsAppCampaignRequest;

interface WhatsAppCampaignsClientInterface
{
    /**
     * Retrieve a paginated list of all your WhatsApp campaigns with their statistics and metadata. Results can be filtered by creation date range using startDate and endDate, with a default limit of 50 and maximum of 100 per page. The sort order defaults to descending by modification date.
     *
     * @param GetWhatsAppCampaignsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetWhatsAppCampaignsResponse
     */
    public function getWhatsAppCampaigns(GetWhatsAppCampaignsRequest $request = new GetWhatsAppCampaignsRequest(), ?array $options = null): ?GetWhatsAppCampaignsResponse;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     * <Note>This API requires the List and Segment ids as recipients in Body params.You can use the below Contact endpoints to get the required information.
     * [Get all the Lists](https://developers.brevo.com/reference/getlists-1)
     * [Get all the Segments](https://developers.brevo.com/reference/getsegments)</Note>
     *
     * @param CreateWhatsAppCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateWhatsAppCampaignResponse
     */
    public function createWhatsAppCampaign(CreateWhatsAppCampaignRequest $request, ?array $options = null): ?CreateWhatsAppCampaignResponse;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetWhatsAppConfigResponse
     */
    public function getWhatsAppConfig(?array $options = null): ?GetWhatsAppConfigResponse;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     *
     * @param CreateWhatsAppTemplateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateWhatsAppTemplateResponse
     */
    public function createWhatsAppTemplate(CreateWhatsAppTemplateRequest $request, ?array $options = null): ?CreateWhatsAppTemplateResponse;

    /**
     * Retrieve a paginated list of all your WhatsApp templates with their status, category, language, and metadata. Results can be filtered by creation date range and optionally by source (Automation or Conversations), with a default limit of 50 and maximum of 100 per page. The sort order defaults to descending by modification date.
     *
     * @param GetWhatsAppTemplatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetWhatsAppTemplatesResponse
     */
    public function getWhatsAppTemplates(GetWhatsAppTemplatesRequest $request = new GetWhatsAppTemplatesRequest(), ?array $options = null): ?GetWhatsAppTemplatesResponse;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
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
    public function sendWhatsAppTemplateApproval(int $templateId, ?array $options = null): void;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     * <Note>This API requires the List and Segment ids as recipients in Body params.You can use the below Contact endpoints to get the required information.
     * [Get all the Lists](https://developers.brevo.com/reference/getlists-1)
     * [Get all the Segments](https://developers.brevo.com/reference/getsegments)</Note>
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
     * @return ?GetWhatsAppCampaignResponse
     */
    public function getWhatsAppCampaign(int $campaignId, ?array $options = null): ?GetWhatsAppCampaignResponse;

    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.
     * [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     * <Note>This API requires the List and Segment ids as recipients in Body params.You can use the below Contact endpoints to get the required information.
     * [Get all the Lists](https://developers.brevo.com/reference/getlists-1)
     * [Get all the Segments](https://developers.brevo.com/reference/getsegments)</Note>
     *
     * @param int $campaignId id of the campaign
     * @param UpdateWhatsAppCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateWhatsAppCampaign(int $campaignId, UpdateWhatsAppCampaignRequest $request = new UpdateWhatsAppCampaignRequest(), ?array $options = null): void;

    /**
     * Delete a WhatsApp campaign by its campaign ID. The campaign must exist; if the campaign ID is not found, a 404 error is returned. This action is permanent and cannot be undone.
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
    public function deleteWhatsAppCampaign(int $campaignId, ?array $options = null): void;
}
