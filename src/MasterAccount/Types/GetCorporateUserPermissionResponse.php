<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Check admin user permissions
 */
class GetCorporateUserPermissionResponse extends JsonSerializableType
{
    /**
     * @var string $email Email address of the user.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var GetCorporateUserPermissionResponseFeatureAccess $featureAccess Granular feature permissions given to the user.
     */
    #[JsonProperty('feature_access')]
    public GetCorporateUserPermissionResponseFeatureAccess $featureAccess;

    /**
     * @var array<GetCorporateUserPermissionResponseGroupsItem> $groups
     */
    #[JsonProperty('groups'), ArrayType([GetCorporateUserPermissionResponseGroupsItem::class])]
    public array $groups;

    /**
     * @var string $status Status of the invited user.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   email: string,
     *   featureAccess: GetCorporateUserPermissionResponseFeatureAccess,
     *   groups: array<GetCorporateUserPermissionResponseGroupsItem>,
     *   status: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->featureAccess = $values['featureAccess'];
        $this->groups = $values['groups'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
