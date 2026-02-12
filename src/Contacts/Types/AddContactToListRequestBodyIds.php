<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class AddContactToListRequestBodyIds extends JsonSerializableType
{
    /**
     * @var ?array<int> $ids IDs to add to a list. You can pass a **maximum of 150 IDs** for addition in one request. **_If you need to add the emails in bulk, please prefer /contacts/import api._**
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
