<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Process\Requests\GetProcessesRequest;

class ProcessWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetProcesses(): void {
        $testId = 'process.get_processes.0';
        $this->client->process->getProcesses(
            new GetProcessesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'process.get_processes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/processes",
            null,
            1
        );
    }

    /**
     */
    public function testGetProcess(): void {
        $testId = 'process.get_process.0';
        $this->client->process->getProcess(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'process.get_process.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/processes/1000000",
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
