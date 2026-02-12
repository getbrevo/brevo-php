<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Admin user groups list
 */
class GetCorporateInvitedUsersListResponseUsersItemGroups extends JsonSerializableType
{
    /**
     * @var ?string $id group id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name group name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
