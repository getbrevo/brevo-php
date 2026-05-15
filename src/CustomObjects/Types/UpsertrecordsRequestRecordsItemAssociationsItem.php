<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpsertrecordsRequestRecordsItemAssociationsItem extends JsonSerializableType
{
    /**
     * @var string $objectType Type of the associated object
     */
    #[JsonProperty('object_type')]
    public string $objectType;

    /**
     * @var ?value-of<UpsertrecordsRequestRecordsItemAssociationsItemAction> $action Action to perform on the association. - `link`: Create association between records (default if not provided) - `unlink`: Remove association between records. Idempotent — unlinking a non-existing association is a no-op success.
     */
    #[JsonProperty('action')]
    public ?string $action;

    /**
     * @var array<UpsertrecordsRequestRecordsItemAssociationsItemRecordsItem> $records
     */
    #[JsonProperty('records'), ArrayType([UpsertrecordsRequestRecordsItemAssociationsItemRecordsItem::class])]
    public array $records;

    /**
     * @param array{
     *   objectType: string,
     *   records: array<UpsertrecordsRequestRecordsItemAssociationsItemRecordsItem>,
     *   action?: ?value-of<UpsertrecordsRequestRecordsItemAssociationsItemAction>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->objectType = $values['objectType'];
        $this->action = $values['action'] ?? null;
        $this->records = $values['records'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
