<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RemoveContactFromListRequestBodyIds extends JsonSerializableType
{
    /**
     * @var ?array<int> $ids **Required if 'all' is false and 'emails', 'extIds' are empty.** IDs to remove from a list. You can pass a **maximum of 150 IDs** for removal in one request.
     */
    #[JsonProperty('ids'), ArrayType(['integer'])]
    public ?array $ids;

    /**
     * @param array{
     *   ids?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ids = $values['ids'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
