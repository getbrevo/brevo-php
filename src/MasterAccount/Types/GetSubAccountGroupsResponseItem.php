<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSubAccountGroupsResponseItem extends JsonSerializableType
{
    /**
     * @var ?string $groupName The name of the group of sub-accounts
     */
    #[JsonProperty('groupName')]
    public ?string $groupName;

    /**
     * @var ?string $id Unique id of the group
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @param array{
     *   groupName?: ?string,
     *   id?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->groupName = $values['groupName'] ?? null;
        $this->id = $values['id'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
