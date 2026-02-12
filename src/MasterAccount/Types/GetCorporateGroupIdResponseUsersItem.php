<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateGroupIdResponseUsersItem extends JsonSerializableType
{
    /**
     * @var ?string $email Email address of the user
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $firstName First name of the user
     */
    #[JsonProperty('firstName')]
    public ?string $firstName;

    /**
     * @var ?string $lastName Last name of the user
     */
    #[JsonProperty('lastName')]
    public ?string $lastName;

    /**
     * @param array{
     *   email?: ?string,
     *   firstName?: ?string,
     *   lastName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->firstName = $values['firstName'] ?? null;
        $this->lastName = $values['lastName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
