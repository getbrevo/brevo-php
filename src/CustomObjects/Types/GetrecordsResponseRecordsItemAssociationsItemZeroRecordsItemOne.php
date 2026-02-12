<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemOne extends JsonSerializableType
{
    /**
     * @var ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemOneIdentifiers $identifiers Identifiers attached with the associated object record.
     */
    #[JsonProperty('identifiers')]
    public ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemOneIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?GetrecordsResponseRecordsItemAssociationsItemZeroRecordsItemOneIdentifiers,
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
