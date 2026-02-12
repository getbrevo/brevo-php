<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItem extends JsonSerializableType
{
    /**
     * @var ?UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItemIdentifiers $identifiers
     */
    #[JsonProperty('identifiers')]
    public ?UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItemIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItemIdentifiers,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifiers = $values['identifiers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
