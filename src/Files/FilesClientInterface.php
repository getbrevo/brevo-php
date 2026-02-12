<?php

namespace Brevo\Files;

use Brevo\Files\Requests\GetCrmFilesRequest;
use Brevo\Types\FileData;
use Brevo\Files\Requests\PostCrmFilesRequest;
use Brevo\Files\Types\GetCrmFilesIdResponse;

interface FilesClientInterface
{
    /**
     * @param GetCrmFilesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<FileData>
     */
    public function getAllFiles(GetCrmFilesRequest $request = new GetCrmFilesRequest(), ?array $options = null): array;

    /**
     * @param PostCrmFilesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return FileData
     */
    public function uploadAFile(PostCrmFilesRequest $request, ?array $options = null): FileData;

    /**
     * @param string $id File id to download.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCrmFilesIdResponse
     */
    public function downloadAFile(string $id, ?array $options = null): GetCrmFilesIdResponse;

    /**
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
     * @param string $id File id to get file data.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FileData
     */
    public function getFileDetails(string $id, ?array $options = null): FileData;
}
