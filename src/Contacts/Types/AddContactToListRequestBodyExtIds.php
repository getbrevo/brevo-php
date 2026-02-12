<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class AddContactToListRequestBodyExtIds extends JsonSerializableType
{
    /**
     * @var ?array<string> $extIds EXT_ID attributes to add to a list. You can pass a **maximum of 150 EXT_ID attributes** for addition in one request. **_If you need to add the emails in bulk, please prefer /contacts/import api._**
     */
    #[JsonProperty('extIds'), ArrayType(['string'])]
    public ?array $extIds;

    /**
     * @param array{
     *   extIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extIds = $values['extIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
