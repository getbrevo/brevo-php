<?php

namespace Brevo\TransactionalWhatsApp;

use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageRequestParams;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageRequestText;
use Brevo\TransactionalWhatsApp\Types\SendWhatsappMessageResponse;
use Brevo\TransactionalWhatsApp\Requests\GetWhatsappEventReportRequest;
use Brevo\TransactionalWhatsApp\Types\GetWhatsappEventReportResponse;

interface TransactionalWhatsAppClientInterface
{
    /**
     * <Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below. [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
     * This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)
     *
     * @param (
     *    SendWhatsappMessageRequestParams
     *   |SendWhatsappMessageRequestText
     * ) $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SendWhatsappMessageResponse
     */
    public function sendWhatsappMessage(SendWhatsappMessageRequestParams|SendWhatsappMessageRequestText $request, ?array $options = null): SendWhatsappMessageResponse;

    /**
     * This endpoint will show the unaggregated statistics for WhatsApp activity (30 days by default if `startDate` and `endDate` or `days` is not passed. The date range can not exceed 90 days)
     *
     * @param GetWhatsappEventReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWhatsappEventReportResponse
     */
    public function getWhatsappEventReport(GetWhatsappEventReportRequest $request = new GetWhatsappEventReportRequest(), ?array $options = null): GetWhatsappEventReportResponse;
}
