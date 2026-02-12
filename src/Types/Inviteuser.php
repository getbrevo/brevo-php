<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class Inviteuser extends JsonSerializableType
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
     * @var array<InviteuserPrivilegesItem> $privileges
     */
    #[JsonProperty('privileges'), ArrayType([InviteuserPrivilegesItem::class])]
    public array $privileges;

    /**
     * @param array{
     *   allFeaturesAccess: bool,
     *   email: string,
     *   privileges: array<InviteuserPrivilegesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allFeaturesAccess = $values['allFeaturesAccess'];
        $this->email = $values['email'];
        $this->privileges = $values['privileges'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
