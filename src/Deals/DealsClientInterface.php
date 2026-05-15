<?php

namespace Brevo\Deals;

use Brevo\Deals\Types\GetCrmAttributesDealsResponseItem;
use Brevo\Deals\Requests\GetCrmDealsRequest;
use Brevo\Deals\Types\GetCrmDealsResponse;
use Brevo\Deals\Requests\PostCrmDealsRequest;
use Brevo\Deals\Types\PostCrmDealsResponse;
use Brevo\Deals\Requests\PostCrmDealsImportRequest;
use Brevo\Deals\Types\PostCrmDealsImportResponse;
use Brevo\Deals\Requests\PatchCrmDealsLinkUnlinkIdRequest;
use Brevo\Types\Deal;
use Brevo\Deals\Requests\PatchCrmDealsIdRequest;
use Brevo\Types\Pipeline;

interface DealsClientInterface
{
    /**
     * Retrieve the list of all attributes defined for deals, including both system-default and custom attributes. Each attribute includes its label, internal name, type, required status, and available options for select-type attributes.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetCrmAttributesDealsResponseItem>
     */
    public function getDealAttributes(?array $options = null): ?array;

    /**
     * Retrieve a paginated list of deals with optional filtering, sorting, and search capabilities. Results can be filtered by attributes such as deal name or owner, linked companies, linked contacts, or modification/creation timestamps. Default sort order is descending by creation date.
     *
     * @param GetCrmDealsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCrmDealsResponse
     */
    public function getAllDeals(GetCrmDealsRequest $request = new GetCrmDealsRequest(), ?array $options = null): ?GetCrmDealsResponse;

    /**
     * Create a new deal in the CRM with the specified name, attributes, and optional associations to contacts and companies. You can assign the deal to a specific pipeline and stage by providing `pipeline` and `deal_stage` attribute IDs, which can be retrieved from the pipeline details endpoint.
     *
     * @param PostCrmDealsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostCrmDealsResponse
     */
    public function createADeal(PostCrmDealsRequest $request, ?array $options = null): ?PostCrmDealsResponse;

    /**
     * Import deals from a CSV file with mapping options.
     *
     * @param PostCrmDealsImportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PostCrmDealsImportResponse
     */
    public function importDealsCreationAndUpdation(PostCrmDealsImportRequest $request = new PostCrmDealsImportRequest(), ?array $options = null): ?PostCrmDealsImportResponse;

    /**
     * Link or unlink contacts and companies with a specific deal in a single request. You can simultaneously link new contacts/companies and unlink existing ones by providing the respective ID arrays in the request body.
     *
     * @param string $id
     * @param PatchCrmDealsLinkUnlinkIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function linkAndUnlinkADealWithContactsAndCompanies(string $id, PatchCrmDealsLinkUnlinkIdRequest $request = new PatchCrmDealsLinkUnlinkIdRequest(), ?array $options = null): void;

    /**
     * Retrieve the full details of a single deal by its identifier, including its attributes, pipeline stage, linked contacts, and linked companies. Returns a 404 error if the deal does not exist.
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
     * @return ?Deal
     */
    public function getADeal(string $id, ?array $options = null): ?Deal;

    /**
     * Permanently delete a deal by its identifier. The requesting user must be the deal owner or have manage permission on deals; otherwise, a 403 Forbidden error is returned.
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
    public function deleteADeal(string $id, ?array $options = null): void;

    /**
     * Update an existing deal''s attributes, name, linked contacts, or linked companies. Note that passing `linkedContactsIds` or `linkedCompaniesIds` replaces the entire list of associations, so omitted IDs will be removed. To move a deal to a different pipeline or stage, provide both the `pipeline` and `deal_stage` attribute IDs.
     *
     * @param string $id
     * @param PatchCrmDealsIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateADeal(string $id, PatchCrmDealsIdRequest $request = new PatchCrmDealsIdRequest(), ?array $options = null): void;

    /**
     * This endpoint is deprecated. Prefer /crm/pipeline/details/{pipelineID} instead.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Pipeline
     */
    public function getPipelineStages(?array $options = null): ?Pipeline;

    /**
     * Retrieve the list of all deal pipelines configured for your account, including each pipeline''s stages and settings. If no pipelines have been configured yet, a default pipeline is automatically created and returned.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<Pipeline>
     */
    public function getAllPipelines(?array $options = null): ?array;

    /**
     * Retrieve the details of a specific deal pipeline by its identifier, including its stages, stage ordering, and configuration. Use this endpoint to obtain the pipeline and stage IDs needed when creating or updating deals.
     *
     * @param string $pipelineId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<Pipeline>
     */
    public function getAPipeline(string $pipelineId, ?array $options = null): ?array;
}
