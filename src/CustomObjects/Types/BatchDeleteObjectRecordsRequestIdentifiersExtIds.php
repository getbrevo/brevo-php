<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class BatchDeleteObjectRecordsRequestIdentifiersExtIds extends JsonSerializableType
{
    /**
     * @var array<string> $extIds List of external record identifiers
     */
    #[JsonProperty('ext_ids'), ArrayType(['string'])]
    public array $extIds;

    /**
     * @param array{
     *   extIds: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->extIds = $values['extIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
