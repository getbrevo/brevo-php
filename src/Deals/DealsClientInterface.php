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
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<GetCrmAttributesDealsResponseItem>
     */
    public function getDealAttributes(?array $options = null): array;

    /**
     * @param GetCrmDealsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCrmDealsResponse
     */
    public function getAllDeals(GetCrmDealsRequest $request = new GetCrmDealsRequest(), ?array $options = null): GetCrmDealsResponse;

    /**
     * @param PostCrmDealsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCrmDealsResponse
     */
    public function createADeal(PostCrmDealsRequest $request, ?array $options = null): PostCrmDealsResponse;

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
     * @return PostCrmDealsImportResponse
     */
    public function importDealsCreationAndUpdation(PostCrmDealsImportRequest $request = new PostCrmDealsImportRequest(), ?array $options = null): PostCrmDealsImportResponse;

    /**
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
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Deal
     */
    public function getADeal(string $id, ?array $options = null): Deal;

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
    public function deleteADeal(string $id, ?array $options = null): void;

    /**
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
     * @return Pipeline
     */
    public function getPipelineStages(?array $options = null): Pipeline;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<Pipeline>
     */
    public function getAllPipelines(?array $options = null): array;

    /**
     * @param string $pipelineId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<Pipeline>
     */
    public function getAPipeline(string $pipelineId, ?array $options = null): array;
}
