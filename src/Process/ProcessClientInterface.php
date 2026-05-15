<?php

namespace Brevo\Process;

use Brevo\Process\Requests\GetProcessesRequest;
use Brevo\Process\Types\GetProcessesResponse;
use Brevo\Process\Types\GetProcessResponse;

interface ProcessClientInterface
{
    /**
     * Retrieves a list of background processes from your Brevo account with filtering and pagination.
     *
     * **Use this to:**
     * - Monitor background process activity and status
     * - Track long-running operations and tasks
     * - Find process IDs for detailed status checking
     * - Review process history and performance
     * - Identify failed or stuck processes for troubleshooting
     *
     * **Key information returned:**
     * - Process details (ID, name, status)
     * - Export download URLs for completed export processes
     * - Import details with CSV report URLs for completed import processes
     * - Total count of processes for pagination
     *
     * **Important considerations:**
     * - Background processes handle long-running operations like imports and exports
     * - Process status indicates current state (queued, processing, completed)
     * - Export processes provide download URLs when completed
     * - Import processes provide CSV report URLs with details about problematic records
     * - Use pagination for accounts with many historical processes
     * - Sort options available for creation order (ascending or descending)
     * - Default limit is 10 results per page, maximum is 50
     *
     * @param GetProcessesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetProcessesResponse
     */
    public function getProcesses(GetProcessesRequest $request = new GetProcessesRequest(), ?array $options = null): ?GetProcessesResponse;

    /**
     * Retrieves detailed information about a specific background process.
     *
     * **Use this to:**
     * - Get detailed status of a specific process
     * - Monitor process progress and completion
     * - Download results from completed export processes
     * - Check error details for failed processes
     * - Track process execution times
     *
     * **Key information returned:**
     * - Complete process details (ID, name, status)
     * - Download URLs for completed export processes
     * - Import details with CSV report URLs for completed import processes
     *
     * **Important considerations:**
     * - Process ID must exist in your account and not be deleted
     * - Completed export processes include download URLs
     * - Completed import processes include CSV report URLs with details about problematic records
     * - Different process types return different result structures
     *
     * @param int $processId Id of the process
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetProcessResponse
     */
    public function getProcess(int $processId, ?array $options = null): ?GetProcessResponse;
}
