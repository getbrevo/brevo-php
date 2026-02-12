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
     * - Process details (ID, name, type, status)
     * - Process creation and completion timestamps
     * - Process progress and completion status
     * - Error information for failed processes
     * - Process result data and download links
     *
     * **Important considerations:**
     * - Background processes handle long-running operations like imports and exports
     * - Process status indicates current state (queued, processing, completed, failed, cancelled)
     * - Export processes provide download URLs when completed
     * - Failed processes include error messages for troubleshooting
     * - Use pagination for accounts with many historical processes
     * - Sort options available for creation order (ascending or descending)
     * - Different process types handle specific operations (imports, exports, calculations)
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
     * @return GetProcessesResponse
     */
    public function getProcesses(GetProcessesRequest $request = new GetProcessesRequest(), ?array $options = null): GetProcessesResponse;

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
     * - Complete process details and status
     * - Import/export statistics and results
     * - Error information for troubleshooting
     * - Download URLs for export processes
     * - Process timing and performance data
     *
     * **Important considerations:**
     * - Process ID must exist in your account
     * - Completed processes provide detailed statistics and results
     * - Export processes include download URLs when successful
     * - Failed processes contain error messages for debugging
     * - Timing information helps with performance analysis
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
     * @return GetProcessResponse
     */
    public function getProcess(int $processId, ?array $options = null): GetProcessResponse;
}
