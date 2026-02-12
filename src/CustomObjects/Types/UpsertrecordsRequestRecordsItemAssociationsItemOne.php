<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class UpsertrecordsRequestRecordsItemAssociationsItemOne extends JsonSerializableType
{
    /**
     * @var ?string $objectType Type of the associated object
     */
    #[JsonProperty('object_type')]
    public ?string $objectType;

    /**
     * @var ?array<(
     *    UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZero
     *   |UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemOne
     * )> $records
     */
    #[JsonProperty('records'), ArrayType([new Union(UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZero::class, UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemOne::class)])]
    public ?array $records;

    /**
     * @param array{
     *   objectType?: ?string,
     *   records?: ?array<(
     *    UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemZero
     *   |UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemOne
     * )>,
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
