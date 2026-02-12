<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\MasterAccount\Types\InviteAdminUserRequestPrivilegesItem;

class InviteAdminUserRequest extends JsonSerializableType
{
    /**
     * @var bool $allFeaturesAccess All access to the features
     */
    #[JsonProperty('all_features_access')]
    public bool $allFeaturesAccess;

    /**
     * @var string $email Email address for the organization
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?array<string> $groupIds Ids of Group
     */
    #[JsonProperty('groupIds'), ArrayType(['string'])]
    public ?array $groupIds;

    /**
     * @var array<InviteAdminUserRequestPrivilegesItem> $privileges
     */
    #[JsonProperty('privileges'), ArrayType([InviteAdminUserRequestPrivilegesItem::class])]
    public array $privileges;

    /**
     * @param array{
     *   allFeaturesAccess: bool,
     *   email: string,
     *   privileges: array<InviteAdminUserRequestPrivilegesItem>,
     *   groupIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allFeaturesAccess = $values['allFeaturesAccess'];
        $this->email = $values['email'];
        $this->groupIds = $values['groupIds'] ?? null;
        $this->privileges = $values['privileges'];
    }
}
