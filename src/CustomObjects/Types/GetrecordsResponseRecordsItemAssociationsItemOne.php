<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class GetrecordsResponseRecordsItemAssociationsItemOne extends JsonSerializableType
{
    /**
     * @var ?string $objectType Type of the associated object
     */
    #[JsonProperty('object_type')]
    public ?string $objectType;

    /**
     * @var ?array<(
     *    GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZero
     *   |GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemOne
     * )> $records
     */
    #[JsonProperty('records'), ArrayType([new Union(GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZero::class, GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemOne::class)])]
    public ?array $records;

    /**
     * @param array{
     *   objectType?: ?string,
     *   records?: ?array<(
     *    GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemZero
     *   |GetrecordsResponseRecordsItemAssociationsItemOneRecordsItemOne
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
