<?php

namespace Brevo\Process;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Process\Requests\GetProcessesRequest;
use Brevo\Process\Types\GetProcessesResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\Process\Types\GetProcessResponse;

class ProcessClient implements ProcessClientInterface
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getProcesses(GetProcessesRequest $request = new GetProcessesRequest(), ?array $options = null): GetProcessesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "processes",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetProcessesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getProcess(int $processId, ?array $options = null): GetProcessResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "processes/{$processId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetProcessResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
