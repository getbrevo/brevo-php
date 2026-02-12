<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZero extends JsonSerializableType
{
    /**
     * @var ?UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers $identifiers Identifiers attached with the associated object record. It can be ext_id or id. NOTE: - Either ext_id or id is required, if both are not provided, then error will be returned. - Both ext_id and id cannot be provided in the same request.
     */
    #[JsonProperty('identifiers')]
    public ?UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers $identifiers;

    /**
     * @param array{
     *   identifiers?: ?UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZeroIdentifiers,
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
