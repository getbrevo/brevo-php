<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Feature accessiblity given to the user. (Required only
 * if status is active)
 */
class GetCorporateInvitedUsersListResponseUsersItemFeatureAccess extends JsonSerializableType
{
    /**
     * @var ?array<string> $analytics Analytics dashboard accessibility
     */
    #[JsonProperty('analytics'), ArrayType(['string'])]
    public ?array $analytics;

    /**
     * @var ?array<string> $apiKeys Api keys accessiblity.
     */
    #[JsonProperty('api_keys'), ArrayType(['string'])]
    public ?array $apiKeys;

    /**
     * Apps management accessiblity | Not available in
     * ENTv2
     *
     * @var ?array<string> $appsManagement
     */
    #[JsonProperty('apps_management'), ArrayType(['string'])]
    public ?array $appsManagement;

    /**
     * Authorization to create sub-organization in the
     * admin account. If the user creating the
     * sub-organization, belongs to a group, the user must
     * choose a group at the sub-organization creation.
     *
     * @var ?array<string> $createSubOrganizations
     */
    #[JsonProperty('create_sub_organizations'), ArrayType(['string'])]
    public ?array $createSubOrganizations;

    /**
     * Authorization to manage and access sub-organizations
     * in the admin account.
     *
     * @var ?array<string> $manageSubOrganizations
     */
    #[JsonProperty('manage_sub_organizations'), ArrayType(['string'])]
    public ?array $manageSubOrganizations;

    /**
     * @var ?array<string> $myPlan My plan accessiblity.
     */
    #[JsonProperty('my_plan'), ArrayType(['string'])]
    public ?array $myPlan;

    /**
     * Group creation, modification or deletion
     * accessibility
     *
     * @var ?array<string> $subOrganizationGroups
     */
    #[JsonProperty('sub_organization_groups'), ArrayType(['string'])]
    public ?array $subOrganizationGroups;

    /**
     * @var ?array<string> $userManagement User management accessiblity.
     */
    #[JsonProperty('user_management'), ArrayType(['string'])]
    public ?array $userManagement;

    /**
     * @param array{
     *   analytics?: ?array<string>,
     *   apiKeys?: ?array<string>,
     *   appsManagement?: ?array<string>,
     *   createSubOrganizations?: ?array<string>,
     *   manageSubOrganizations?: ?array<string>,
     *   myPlan?: ?array<string>,
     *   subOrganizationGroups?: ?array<string>,
     *   userManagement?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->analytics = $values['analytics'] ?? null;
        $this->apiKeys = $values['apiKeys'] ?? null;
        $this->appsManagement = $values['appsManagement'] ?? null;
        $this->createSubOrganizations = $values['createSubOrganizations'] ?? null;
        $this->manageSubOrganizations = $values['manageSubOrganizations'] ?? null;
        $this->myPlan = $values['myPlan'] ?? null;
        $this->subOrganizationGroups = $values['subOrganizationGroups'] ?? null;
        $this->userManagement = $values['userManagement'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
