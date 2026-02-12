<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Granular feature permissions given to the user.
 */
class GetCorporateUserPermissionResponseFeatureAccess extends JsonSerializableType
{
    /**
     * @var ?array<string> $analytics Permission on analytics
     */
    #[JsonProperty('analytics'), ArrayType(['string'])]
    public ?array $analytics;

    /**
     * @var ?array<string> $apiKeys Permission on api keys
     */
    #[JsonProperty('api_keys'), ArrayType(['string'])]
    public ?array $apiKeys;

    /**
     * @var ?array<string> $appsManagement Permission on apps management
     */
    #[JsonProperty('apps_management'), ArrayType(['string'])]
    public ?array $appsManagement;

    /**
     * @var ?array<string> $createSubOrganizations Permission on create sub-accounts
     */
    #[JsonProperty('create_sub_organizations'), ArrayType(['string'])]
    public ?array $createSubOrganizations;

    /**
     * @var ?array<string> $manageSubOrganizations Permission on manage sub-accounts
     */
    #[JsonProperty('manage_sub_organizations'), ArrayType(['string'])]
    public ?array $manageSubOrganizations;

    /**
     * @var ?array<string> $myPlan Permission on my plan
     */
    #[JsonProperty('my_plan'), ArrayType(['string'])]
    public ?array $myPlan;

    /**
     * @var ?array<string> $subOrganizationGroups Permission on groups
     */
    #[JsonProperty('sub_organization_groups'), ArrayType(['string'])]
    public ?array $subOrganizationGroups;

    /**
     * @var ?array<string> $userManagement Permission on user management
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
