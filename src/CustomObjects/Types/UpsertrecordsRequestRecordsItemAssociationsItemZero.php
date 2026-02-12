<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpsertrecordsRequestRecordsItemAssociationsItemZero extends JsonSerializableType
{
    /**
     * @var ?string $objectType Type of the associated object
     */
    #[JsonProperty('object_type')]
    public ?string $objectType;

    /**
     * @var ?array<UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItem> $records
     */
    #[JsonProperty('records'), ArrayType([UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItem::class])]
    public ?array $records;

    /**
     * @param array{
     *   objectType?: ?string,
     *   records?: ?array<UpsertrecordsRequestRecordsItemAssociationsItemZeroRecordsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->objectType = $values['objectType'] ?? null;
        $this->records = $values['records'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
