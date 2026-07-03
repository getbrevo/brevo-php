<?php

namespace Brevo\ConsentGroups;

use Brevo\ConsentGroups\Requests\GetConsentGroupsRequest;
use Brevo\Types\ConsentGroupsListResponse;
use Brevo\ConsentGroups\Requests\CreateConsentGroupRequest;
use Brevo\Types\ConsentGroup;
use Brevo\ConsentGroups\Requests\UpdateConsentGroupRequest;

interface ConsentGroupsClientInterface
{
    /**
     * Returns a paginated list of consent groups for the account.
     *
     * <Note>This endpoint is only available when the Consent Groups feature is enabled for your account. Returns `403` if the feature is not activated.</Note>
     *
     * @param GetConsentGroupsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConsentGroupsListResponse
     */
    public function getConsentGroups(GetConsentGroupsRequest $request = new GetConsentGroupsRequest(), ?array $options = null): ?ConsentGroupsListResponse;

    /**
     * Creates a new consent group for the account.
     *
     * <Note>This endpoint is only available when the Consent Groups feature is enabled for your account.</Note>
     *
     * @param CreateConsentGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConsentGroup
     */
    public function createConsentGroup(CreateConsentGroupRequest $request, ?array $options = null): ?ConsentGroup;

    /**
     * Returns a single consent group by ID for the account.
     *
     * <Note>This endpoint is only available when the Consent Groups feature is enabled for your account.</Note>
     *
     * @param int $id ID of the consent group
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConsentGroup
     */
    public function getConsentGroup(int $id, ?array $options = null): ?ConsentGroup;

    /**
     * Updates name, description, or signupMode of a consent group. At least one field must be provided.
     *
     * <Note>This endpoint is only available when the Consent Groups feature is enabled for your account.</Note>
     *
     * @param int $id ID of the consent group to update
     * @param UpdateConsentGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConsentGroup
     */
    public function updateConsentGroup(int $id, UpdateConsentGroupRequest $request = new UpdateConsentGroupRequest(), ?array $options = null): ?ConsentGroup;

    /**
     * Deletes a consent group by ID and removes it from all associated contacts.
     *
     * <Note>This endpoint is only available when the Consent Groups feature is enabled for your account.</Note>
     *
     * @param int $id ID of the consent group to delete
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteConsentGroup(int $id, ?array $options = null): void;
}
