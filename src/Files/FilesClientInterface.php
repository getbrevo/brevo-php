<?php

namespace Brevo\Files;

use Brevo\Files\Requests\GetCrmFilesRequest;
use Brevo\Types\FileData;
use Brevo\Files\Requests\PostCrmFilesRequest;
use Brevo\Files\Types\GetCrmFilesIdResponse;

interface FilesClientInterface
{
    /**
     * Retrieve a paginated list of CRM files with optional filtering by entity type, entity IDs, and date range. Results are sorted by creation date in descending order by default, with a default limit of 50 files per page.
     *
     * @param GetCrmFilesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<FileData>
     */
    public function getAllFiles(GetCrmFilesRequest $request = new GetCrmFilesRequest(), ?array $options = null): ?array;

    /**
     * Upload a file and associate it with a contact, company, or deal. The file must be sent as multipart form data with a maximum size of 10 MB. You can optionally link the file to a specific entity by providing the corresponding entity ID.
     *
     * @param PostCrmFilesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?FileData
     */
    public function uploadAFile(PostCrmFilesRequest $request, ?array $options = null): ?FileData;

    /**
     * Get a temporary download URL for a CRM file by its identifier. The returned URL is valid for 5 minutes only and provides direct access to the file content.
     *
     * @param string $id File id to download.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCrmFilesIdResponse
     */
    public function downloadAFile(string $id, ?array $options = null): ?GetCrmFilesIdResponse;

    /**
     * Permanently delete a CRM file by its identifier. This removes the file from storage and unlinks it from any associated contacts, companies, or deals.
     *
     * @param string $id File id to delete.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAFile(string $id, ?array $options = null): void;

    /**
     * Retrieve the metadata and details of a specific CRM file by its identifier. This returns information such as the file name, size, type, creation date, and associated entities, but does not include the file content itself.
     *
     * @param string $id File id to get file data.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FileData
     */
    public function getFileDetails(string $id, ?array $options = null): ?FileData;
}
