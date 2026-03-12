<?php

namespace Brevo\Companies;

use Brevo\Companies\Requests\GetCompaniesRequest;
use Brevo\Companies\Types\GetCompaniesResponse;
use Brevo\Companies\Requests\PostCompaniesRequest;
use Brevo\Companies\Types\PostCompaniesResponse;
use Brevo\Companies\Requests\PostCompaniesImportRequest;
use Brevo\Companies\Types\PostCompaniesImportResponse;
use Brevo\Companies\Requests\PatchCompaniesLinkUnlinkIdRequest;
use Brevo\Types\Company;
use Brevo\Companies\Requests\PatchCompaniesIdRequest;
use Brevo\Companies\Requests\PostCrmAttributesRequest;
use Brevo\Companies\Types\PostCrmAttributesResponse;
use Brevo\Companies\Types\GetCrmAttributesCompaniesResponseItem;

interface CompaniesClientInterface
{
    /**
     * @param GetCompaniesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCompaniesResponse
     */
    public function getAllCompanies(GetCompaniesRequest $request = new GetCompaniesRequest(), ?array $options = null): GetCompaniesResponse;

    /**
     * @param PostCompaniesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCompaniesResponse
     */
    public function createACompany(PostCompaniesRequest $request, ?array $options = null): PostCompaniesResponse;

    /**
     * Import companies from a CSV file with mapping options.
     *
     * @param PostCompaniesImportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return PostCompaniesImportResponse
     */
    public function importCompaniesCreationAndUpdation(PostCompaniesImportRequest $request = new PostCompaniesImportRequest(), ?array $options = null): PostCompaniesImportResponse;

    /**
     * @param string $id
     * @param PatchCompaniesLinkUnlinkIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function linkAndUnlinkCompanyWithContactAndDeal(string $id, PatchCompaniesLinkUnlinkIdRequest $request = new PatchCompaniesLinkUnlinkIdRequest(), ?array $options = null): void;

    /**
     * @param string $id Get Company Details
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Company
     */
    public function getACompany(string $id, ?array $options = null): Company;

    /**
     * @param string $id Company ID to delete
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteACompany(string $id, ?array $options = null): void;

    /**
     * @param string $id
     * @param PatchCompaniesIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Company
     */
    public function updateACompany(string $id, PatchCompaniesIdRequest $request = new PatchCompaniesIdRequest(), ?array $options = null): Company;

    /**
     * @param PostCrmAttributesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCrmAttributesResponse
     */
    public function createACompanyDealAttribute(PostCrmAttributesRequest $request, ?array $options = null): PostCrmAttributesResponse;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<GetCrmAttributesCompaniesResponseItem>
     */
    public function getCompanyAttributes(?array $options = null): array;
}
