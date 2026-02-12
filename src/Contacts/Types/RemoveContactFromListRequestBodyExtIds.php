<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RemoveContactFromListRequestBodyExtIds extends JsonSerializableType
{
    /**
     * @var ?array<string> $extIds **Required if 'all' is false, 'ids' and 'emails' are empty.** EXT_ID attributes to remove from a list. You can pass a **maximum of 150 EXT_ID attributes** for removal in one request.
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
