<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Files\Requests\GetCrmFilesRequest;
use Brevo\Files\Requests\PostCrmFilesRequest;
use Brevo\Utils\File;

class FilesWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAllFiles(): void {
        $testId = 'files.get_all_files.0';
        $this->client->files->getAllFiles(
            new GetCrmFilesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'files.get_all_files.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/files",
            null,
            1
        );
    }

    /**
     */
    public function testUploadAFile(): void {
        $testId = 'files.upload_a_file.0';
        $this->client->files->uploadAFile(
            new PostCrmFilesRequest([
                'file' => File::createFromString("example_file", "example_file"),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'files.upload_a_file.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/files",
            null,
            1
        );
    }

    /**
     */
    public function testDownloadAFile(): void {
        $testId = 'files.download_a_file.0';
        $this->client->files->downloadAFile(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'files.download_a_file.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/files/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAFile(): void {
        $testId = 'files.delete_a_file.0';
        $this->client->files->deleteAFile(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'files.delete_a_file.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/crm/files/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetFileDetails(): void {
        $testId = 'files.get_file_details.0';
        $this->client->files->getFileDetails(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'files.get_file_details.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/files/id/data",
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
