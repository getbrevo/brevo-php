<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Check user permission
 */
class GetUserPermissionResponse extends JsonSerializableType
{
    /**
     * @var string $email Email address of the user.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var array<GetUserPermissionResponsePrivilegesItem> $privileges Granular feature permissions given to the user.
     */
    #[JsonProperty('privileges'), ArrayType([GetUserPermissionResponsePrivilegesItem::class])]
    public array $privileges;

    /**
     * @var string $status Status of the invited user.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   email: string,
     *   privileges: array<GetUserPermissionResponsePrivilegesItem>,
     *   status: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->privileges = $values['privileges'];
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
