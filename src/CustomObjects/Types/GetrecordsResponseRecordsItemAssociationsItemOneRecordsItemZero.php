<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZero extends JsonSerializableType
{
    /**
     * @var ?GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers $identifiers Identifiers attached with the associated object record. Only includes the internal ID.
     */
    #[JsonProperty('identifiers')]
    public ?GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers,
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
