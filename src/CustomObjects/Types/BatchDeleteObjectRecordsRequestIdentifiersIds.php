<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class BatchDeleteObjectRecordsRequestIdentifiersIds extends JsonSerializableType
{
    /**
     * @var array<int> $ids List of object record IDs
     */
    #[JsonProperty('ids'), ArrayType(['integer'])]
    public array $ids;

    /**
     * @param array{
     *   ids: array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ids = $values['ids'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
