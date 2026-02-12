<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetInvitedUsersListResponseUsersItem extends JsonSerializableType
{
    /**
     * @var string $email Email address of the user.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var GetInvitedUsersListResponseUsersItemFeatureAccess $featureAccess Feature accessiblity given to the user.
     */
    #[JsonProperty('feature_access')]
    public GetInvitedUsersListResponseUsersItemFeatureAccess $featureAccess;

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
     *   featureAccess: GetInvitedUsersListResponseUsersItemFeatureAccess,
     *   isOwner: string,
     *   status: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->featureAccess = $values['featureAccess'];
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
