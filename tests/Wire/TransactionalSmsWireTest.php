<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Types\SendTransacSms;
use Brevo\TransactionalSms\Requests\GetTransacAggregatedSmsReportRequest;
use Brevo\TransactionalSms\Requests\GetSmsEventsRequest;
use Brevo\TransactionalSms\Requests\GetTransacSmsReportRequest;

class TransactionalSmsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testSendAsyncTransactionalSms(): void {
        $testId = 'transactional_sms.send_async_transactional_sms.0';
        $this->client->transactionalSms->sendAsyncTransactionalSms(
            new SendTransacSms([
                'recipient' => '33689965433',
                'sender' => 'MyShop',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_sms.send_async_transactional_sms.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/transactionalSMS/send",
            null,
            1
        );
    }

    /**
     */
    public function testSendTransacSms(): void {
        $testId = 'transactional_sms.send_transac_sms.0';
        $this->client->transactionalSms->sendTransacSms(
            new SendTransacSms([
                'recipient' => '33689965433',
                'sender' => 'MyShop',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_sms.send_transac_sms.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/transactionalSMS/sms",
            null,
            1
        );
    }

    /**
     */
    public function testGetTransacAggregatedSmsReport(): void {
        $testId = 'transactional_sms.get_transac_aggregated_sms_report.0';
        $this->client->transactionalSms->getTransacAggregatedSmsReport(
            new GetTransacAggregatedSmsReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_sms.get_transac_aggregated_sms_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/transactionalSMS/statistics/aggregatedReport",
            null,
            1
        );
    }

    /**
     */
    public function testGetSmsEvents(): void {
        $testId = 'transactional_sms.get_sms_events.0';
        $this->client->transactionalSms->getSmsEvents(
            new GetSmsEventsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_sms.get_sms_events.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/transactionalSMS/statistics/events",
            null,
            1
        );
    }

    /**
     */
    public function testGetTransacSmsReport(): void {
        $testId = 'transactional_sms.get_transac_sms_report.0';
        $this->client->transactionalSms->getTransacSmsReport(
            new GetTransacSmsReportRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'transactional_sms.get_transac_sms_report.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/transactionalSMS/statistics/reports",
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
