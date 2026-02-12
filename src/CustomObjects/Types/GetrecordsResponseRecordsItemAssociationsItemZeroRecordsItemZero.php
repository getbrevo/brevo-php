<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemZero extends JsonSerializableType
{
    /**
     * @var ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemZeroIdentifiers $identifiers Identifiers attached with the associated object record.
     */
    #[JsonProperty('identifiers')]
    public ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemZeroIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemZeroIdentifiers,
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
