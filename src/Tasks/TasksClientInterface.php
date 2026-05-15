<?php

namespace Brevo\Tasks;

use Brevo\Tasks\Requests\GetCrmTasksRequest;
use Brevo\Tasks\Types\GetCrmTasksResponse;
use Brevo\Tasks\Requests\PostCrmTasksRequest;
use Brevo\Tasks\Types\PostCrmTasksResponse;
use Brevo\Types\Task;
use Brevo\Tasks\Requests\PatchCrmTasksIdRequest;
use Brevo\Tasks\Types\GetCrmTasktypesResponseItem;

interface TasksClientInterface
{
    /**
     * Retrieve a paginated list of CRM tasks with optional filtering by task type, status, date range, assignee, and linked entities (contacts, deals, companies). Results are sorted by creation date in descending order by default, with a default limit of 50 tasks per page.
     *
     * @param GetCrmTasksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCrmTasksResponse
     */
    public function getAllTasks(GetCrmTasksRequest $request = new GetCrmTasksRequest(), ?array $options = null): ?GetCrmTasksResponse;

    /**
     * Create a new CRM task with the specified name, type, due date, and optional associations to contacts, companies, or deals. A task requires a name, task type ID, and due date at minimum. You can also set a duration, notes, a reminder, and assign the task to a specific user.
     *
     * @param PostCrmTasksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostCrmTasksResponse
     */
    public function createATask(PostCrmTasksRequest $request, ?array $options = null): ?PostCrmTasksResponse;

    /**
     * Retrieve the full details of a single CRM task by its identifier. The response includes the task''s name, type, status, due date, duration, notes, assignee, reminder settings, and linked contacts, companies, or deals.
     *
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Task
     */
    public function getATask(string $id, ?array $options = null): ?Task;

    /**
     * Permanently delete a CRM task by its identifier. This removes the task and cancels any associated reminders. The requesting user must be the task assignee or have manage permission on tasks.
     *
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
     * Update an existing CRM task''s properties such as name, type, due date, status, duration, notes, assignee, reminder, or linked entities. Only the fields provided in the request body will be updated; omitted fields remain unchanged.
     *
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
     * Retrieve the list of all available task types, such as Email, Call, Meeting, Todo, Lunch, Deadline, and LinkedIn. If no task types exist yet, the default set is automatically created and returned. Use the task type ID when creating or updating tasks.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetCrmTasktypesResponseItem>
     */
    public function getAllTaskTypes(?array $options = null): ?array;
}
