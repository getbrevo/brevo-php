<?php

namespace Brevo\TransactionalSms;

use Brevo\Types\SendTransacSms;
use Brevo\TransactionalSms\Types\SendAsyncTransactionalSmsResponse;
use Brevo\TransactionalSms\Types\SendTransacSmsResponse;
use Brevo\TransactionalSms\Requests\GetTransacAggregatedSmsReportRequest;
use Brevo\TransactionalSms\Types\GetTransacAggregatedSmsReportResponse;
use Brevo\TransactionalSms\Requests\GetSmsEventsRequest;
use Brevo\TransactionalSms\Types\GetSmsEventsResponse;
use Brevo\TransactionalSms\Requests\GetTransacSmsReportRequest;
use Brevo\TransactionalSms\Types\GetTransacSmsReportResponse;

interface TransactionalSmsClientInterface
{
    /**
     * <Note>
     * If the user includes stop code in the Transactional SMS, then it will be switched to Marketing SMS automatically and it will be interpreted as a Marketing SMS. To send Transactional SMS as Transactional, it is important not to use stop code.
     *
     * Note: For adding a stop code, client has to add reply STOP to [STOP_CODE] and the [STOP_CODE] will be replaced with the number.
     * </Note>
     *
     * <Note title="For end users in France">
     * Transactional SMS can be sent at any time without time restrictions. However, if a message is categorized as Marketing, it must adhere to specific time restrictions. Messages sent outside of these restricted hours will experience delays and will be processed during allowable times. Specifically, Marketing SMS cannot be processed between 10pm and 8am, on Sundays, and on French public holidays.
     * </Note>
     *
     * @param SendTransacSms $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SendAsyncTransactionalSmsResponse
     */
    public function sendAsyncTransactionalSms(SendTransacSms $request, ?array $options = null): SendAsyncTransactionalSmsResponse;

    /**
     * @param SendTransacSms $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SendTransacSmsResponse
     */
    public function sendTransacSms(SendTransacSms $request, ?array $options = null): SendTransacSmsResponse;

    /**
     * @param GetTransacAggregatedSmsReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetTransacAggregatedSmsReportResponse
     */
    public function getTransacAggregatedSmsReport(GetTransacAggregatedSmsReportRequest $request = new GetTransacAggregatedSmsReportRequest(), ?array $options = null): GetTransacAggregatedSmsReportResponse;

    /**
     * @param GetSmsEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmsEventsResponse
     */
    public function getSmsEvents(GetSmsEventsRequest $request = new GetSmsEventsRequest(), ?array $options = null): GetSmsEventsResponse;

    /**
     * @param GetTransacSmsReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetTransacSmsReportResponse
     */
    public function getTransacSmsReport(GetTransacSmsReportRequest $request = new GetTransacSmsReportRequest(), ?array $options = null): GetTransacSmsReportResponse;
}
