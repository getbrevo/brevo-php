<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpsertrecordsRequestRecordsItemAssociationsItemRecordsItem extends JsonSerializableType
{
    /**
     * @var ?UpsertrecordsRequestRecordsItemAssociationsItemRecordsItemIdentifiers $identifiers Identifiers for the associated object record. Provide either `ext_id` or `id`.
     */
    #[JsonProperty('identifiers')]
    public ?UpsertrecordsRequestRecordsItemAssociationsItemRecordsItemIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?UpsertrecordsRequestRecordsItemAssociationsItemRecordsItemIdentifiers,
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
