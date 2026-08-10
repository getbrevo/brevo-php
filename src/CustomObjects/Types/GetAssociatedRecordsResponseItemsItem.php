<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAssociatedRecordsResponseItemsItem extends JsonSerializableType
{
    /**
     * @var ?GetAssociatedRecordsResponseItemsItemObject $object The associated record. `ext_id`, `attributes`, `created_at` and `updated_at` are omitted when they are not available for the record.
     */
    #[JsonProperty('object')]
    public ?GetAssociatedRecordsResponseItemsItemObject $object;

    /**
     * @var ?string $type Object type of the associated record.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   object?: ?GetAssociatedRecordsResponseItemsItemObject,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->object = $values['object'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
