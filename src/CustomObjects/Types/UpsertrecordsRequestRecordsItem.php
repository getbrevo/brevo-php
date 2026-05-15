<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpsertrecordsRequestRecordsItem extends JsonSerializableType
{
    /**
     * @var ?array<UpsertrecordsRequestRecordsItemAssociationsItem> $associations List of associations for the object record. Maximum 20 total entries allowed, with a maximum of 10 link actions and 10 unlink actions. Each entry specifies an object_type and an action (link or unlink). Unlink is idempotent — removing a non-existing association does not return an error. Both associated records must already exist before creating a link.
     */
    #[JsonProperty('associations'), ArrayType([UpsertrecordsRequestRecordsItemAssociationsItem::class])]
    public ?array $associations;

    /**
     * Key-value pairs of attribute data for the object record. Each key must be the attribute **key** (e.g., `company_name`, `engine_type`), not the attribute label (e.g., "Company Name", "Engine Type"). Only attributes that already exist in the object schema will be accepted — unknown keys are silently ignored. Minimum 1 attribute is required.
     *
     * For `category` or `multiple_category` attributes, set the value to the option **key** (not the option label or option ID). You can find available option keys in the `options` array returned by the GET attributes endpoint, or in the frontend under each attribute's settings.
     *
     * For example, use the option key "hybrid" not the label "Hybrid" — using the label will be silently ignored.
     *
     * For `multiple_choice` type, pass an **array of option keys** (not display labels). For example, if options have keys `"sunroof"` and `"leather_seats"`, pass `["sunroof", "leather_seats"]`.
     *
     * @var ?array<string, mixed> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * Identifiers for the object record. Supports `id` (singular, not `ids`) or `ext_id`.
     * - `ext_id`: Your external system's identifier for this record.
     * - `id`: Internal Brevo record ID — can only be used for **updating** existing records, not for creation.
     * NOTE:
     * - This is an optional field. If no identifier is provided, Brevo auto-generates an internal ID that you can use for future operations.
     * - If both `ext_id` and `id` are provided, `id` takes precedence and the operation is treated as an update. It is recommended to provide only one identifier per record.
     *
     * @var ?UpsertrecordsRequestRecordsItemIdentifiers $identifiers
     */
    #[JsonProperty('identifiers')]
    public ?UpsertrecordsRequestRecordsItemIdentifiers $identifiers;

    /**
     * @param array{
     *   associations?: ?array<UpsertrecordsRequestRecordsItemAssociationsItem>,
     *   attributes?: ?array<string, mixed>,
     *   identifiers?: ?UpsertrecordsRequestRecordsItemIdentifiers,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->associations = $values['associations'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
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
