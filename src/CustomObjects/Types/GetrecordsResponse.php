<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetrecordsResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Total number of object records for an object type.
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetrecordsResponseRecordsItem> $records
     */
    #[JsonProperty('records'), ArrayType([GetrecordsResponseRecordsItem::class])]
    public ?array $records;

    /**
     * @param array{
     *   count?: ?int,
     *   records?: ?array<GetrecordsResponseRecordsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
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
