<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Groups details
 */
class GetCorporateUserPermissionResponseGroupsItem extends JsonSerializableType
{
    /**
     * @var ?string $id group identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Group name
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
