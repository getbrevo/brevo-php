<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\CustomObjects\Requests\UpsertrecordsRequest;
use Brevo\CustomObjects\Types\UpsertrecordsRequestRecordsItem;
use Brevo\CustomObjects\Requests\GetrecordsRequest;
use Brevo\CustomObjects\Requests\BatchDeleteObjectRecordsRequest;
use Brevo\CustomObjects\Types\BatchDeleteObjectRecordsRequestIdentifiersIds;

class CustomObjectsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testUpsertrecords(): void {
        $testId = 'custom_objects.upsertrecords.0';
        $this->client->customObjects->upsertrecords(
            'vehicle',
            new UpsertrecordsRequest([
                'records' => [
                    new UpsertrecordsRequestRecordsItem([]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'custom_objects.upsertrecords.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/objects/vehicle/batch/upsert",
            null,
            1
        );
    }

    /**
     */
    public function testGetrecords(): void {
        $testId = 'custom_objects.getrecords.0';
        $this->client->customObjects->getrecords(
            'vehicle',
            new GetrecordsRequest([
                'limit' => 1000000,
                'pageNum' => 1000000,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'custom_objects.getrecords.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/objects/vehicle/records",
            ['limit' => '1000000', 'page_num' => '1000000'],
            1
        );
    }

    /**
     */
    public function testBatchDeleteObjectRecords(): void {
        $testId = 'custom_objects.batch_delete_object_records.0';
        $this->client->customObjects->batchDeleteObjectRecords(
            'vehicle',
            new BatchDeleteObjectRecordsRequest([
                'identifiers' => new BatchDeleteObjectRecordsRequestIdentifiersIds([
                    'ids' => [
                        1,
                    ],
                ]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'custom_objects.batch_delete_object_records.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/objects/vehicle/batch/delete",
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
