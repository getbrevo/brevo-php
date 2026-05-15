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
use Brevo\Companies\Requests\PatchCrmAttributesIdRequest;
use Brevo\Companies\Types\GetCrmAttributesCompaniesResponseItem;

interface CompaniesClientInterface
{
    /**
     * Retrieve a paginated list of companies with optional filtering, sorting, and search capabilities. Results are sorted by creation date in descending order by default, and can be filtered by attributes, linked contacts, linked deals, or modification/creation timestamps.
     *
     * @param GetCompaniesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCompaniesResponse
     */
    public function getAllCompanies(GetCompaniesRequest $request = new GetCompaniesRequest(), ?array $options = null): ?GetCompaniesResponse;

    /**
     * Create a new CRM company with the specified name, attributes, and optional associations to contacts and deals. The company name is required, and you can optionally provide a country code when a phone number attribute is included.
     *
     * @param PostCompaniesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostCompaniesResponse
     */
    public function createACompany(PostCompaniesRequest $request, ?array $options = null): ?PostCompaniesResponse;

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
     * @return ?PostCompaniesImportResponse
     */
    public function importCompaniesCreationAndUpdation(PostCompaniesImportRequest $request = new PostCompaniesImportRequest(), ?array $options = null): ?PostCompaniesImportResponse;

    /**
     * Link or unlink contacts and deals with a specific company in a single request. You can simultaneously link new contacts/deals and unlink existing ones by providing the respective ID arrays in the request body.
     *
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
     * Retrieve the full details of a single company by its identifier, including its attributes, linked contacts, and linked deals. Returns a 404 error if the company does not exist, or a 403 error if the user lacks permission to view the company.
     *
     * @param string $id Get Company Details
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Company
     */
    public function getACompany(string $id, ?array $options = null): ?Company;

    /**
     * Permanently delete a company by its identifier. The requesting user must be the company owner or have manage permission on companies; otherwise, a 403 Forbidden error is returned.
     *
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
     * Update an existing company''s attributes, name, linked contacts, or linked deals. Note that passing `linkedContactsIds` or `linkedDealsIds` replaces the entire list of associations, so omitted IDs will be removed. The company name cannot be set to an empty string.
     *
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
     * @return ?Company
     */
    public function updateACompany(string $id, PatchCompaniesIdRequest $request = new PatchCompaniesIdRequest(), ?array $options = null): ?Company;

    /**
     * Create a new custom attribute for companies or deals. The attribute label must be unique within the object type, cannot exceed 50 characters, and cannot use reserved names. For `single-select` or `multi-choice` attribute types, you must also provide the `optionsLabels` array.
     *
     * @param PostCrmAttributesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostCrmAttributesResponse
     */
    public function createACompanyDealAttribute(PostCrmAttributesRequest $request, ?array $options = null): ?PostCrmAttributesResponse;

    /**
     * Delete an existing custom attribute by its identifier. This permanently removes the attribute definition and cleans up all references to it across companies or deals. System-default and non-editable attributes cannot be deleted.
     *
     * @param string $id Attribute ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAnAttribute(string $id, ?array $options = null): void;

    /**
     * Update an existing custom attribute''s label or options. You can rename the attribute label or modify the available options for `single-select` and `multi-choice` attribute types. System-default attributes cannot be modified except for specific editable fields.
     *
     * @param string $id Attribute ID
     * @param PatchCrmAttributesIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateAnAttribute(string $id, PatchCrmAttributesIdRequest $request = new PatchCrmAttributesIdRequest(), ?array $options = null): void;

    /**
     * Retrieve the list of all attributes defined for companies, including both system-default and custom attributes. Each attribute includes its label, internal name, type, required status, and available options for select-type attributes.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetCrmAttributesCompaniesResponseItem>
     */
    public function getCompanyAttributes(?array $options = null): ?array;
}
