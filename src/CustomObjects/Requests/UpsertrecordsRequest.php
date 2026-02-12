<?php

namespace Brevo\CustomObjects\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\CustomObjects\Types\UpsertrecordsRequestRecordsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpsertrecordsRequest extends JsonSerializableType
{
    /**
     * @var array<UpsertrecordsRequestRecordsItem> $records List of object records to be upsert. Each record can have attributes, identifiers, and associations.
     */
    #[JsonProperty('records'), ArrayType([UpsertrecordsRequestRecordsItem::class])]
    public array $records;

    /**
     * @param array{
     *   records: array<UpsertrecordsRequestRecordsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->records = $values['records'];
    }
}
