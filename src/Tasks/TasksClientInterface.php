<?php

namespace Brevo\Tasks;

use Brevo\Tasks\Requests\GetCrmTasksRequest;
use Brevo\Tasks\Types\GetCrmTasksResponse;
use Brevo\Tasks\Requests\PostCrmTasksRequest;
use Brevo\Tasks\Types\PostCrmTasksResponse;
use Brevo\Types\Task;
use Brevo\Tasks\Requests\PatchCrmTasksIdRequest;
use Brevo\Tasks\Types\GetCrmTasktypesResponse;

interface TasksClientInterface
{
    /**
     * @param GetCrmTasksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCrmTasksResponse
     */
    public function getAllTasks(GetCrmTasksRequest $request = new GetCrmTasksRequest(), ?array $options = null): GetCrmTasksResponse;

    /**
     * @param PostCrmTasksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCrmTasksResponse
     */
    public function createATask(PostCrmTasksRequest $request, ?array $options = null): PostCrmTasksResponse;

    /**
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Task
     */
    public function getATask(string $id, ?array $options = null): Task;

    /**
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteATask(string $id, ?array $options = null): void;

    /**
     * @param string $id
     * @param PatchCrmTasksIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateATask(string $id, PatchCrmTasksIdRequest $request = new PatchCrmTasksIdRequest(), ?array $options = null): void;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCrmTasktypesResponse
     */
    public function getAllTaskTypes(?array $options = null): GetCrmTasktypesResponse;
}
