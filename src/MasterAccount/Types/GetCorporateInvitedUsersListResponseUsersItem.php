<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateInvitedUsersListResponseUsersItem extends JsonSerializableType
{
    /**
     * @var string $email Email address of the user.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * Feature accessiblity given to the user. (Required only
     * if status is active)
     *
     * @var GetCorporateInvitedUsersListResponseUsersItemFeatureAccess $featureAccess
     */
    #[JsonProperty('feature_access')]
    public GetCorporateInvitedUsersListResponseUsersItemFeatureAccess $featureAccess;

    /**
     * @var GetCorporateInvitedUsersListResponseUsersItemGroups $groups Admin user groups list
     */
    #[JsonProperty('groups')]
    public GetCorporateInvitedUsersListResponseUsersItemGroups $groups;

    /**
     * @var string $isOwner Flag for indicating is user owner of the organization.
     */
    #[JsonProperty('is_owner')]
    public string $isOwner;

    /**
     * @var string $status Status of the invited user.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   email: string,
     *   featureAccess: GetCorporateInvitedUsersListResponseUsersItemFeatureAccess,
     *   groups: GetCorporateInvitedUsersListResponseUsersItemGroups,
     *   isOwner: string,
     *   status: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->featureAccess = $values['featureAccess'];
        $this->groups = $values['groups'];
        $this->isOwner = $values['isOwner'];
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
