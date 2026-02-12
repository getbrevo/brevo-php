<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateGroupIdResponseGroup extends JsonSerializableType
{
    /**
     * @var ?string $createdAt Group creation date
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $groupName Name of the group
     */
    #[JsonProperty('groupName')]
    public ?string $groupName;

    /**
     * @var ?string $id Group id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @param array{
     *   createdAt?: ?string,
     *   groupName?: ?string,
     *   id?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
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
