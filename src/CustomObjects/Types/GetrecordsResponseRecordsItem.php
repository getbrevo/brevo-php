<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;
use DateTime;
use Brevo\Core\Types\Date;

class GetrecordsResponseRecordsItem extends JsonSerializableType
{
    /**
     * @var ?array<(
     *    GetrecordsResponseRecordsItemAssociationsItemZero
     *   |GetrecordsResponseRecordsItemAssociationsItemOne
     * )> $associations List of associations for the object record. If association query param is true it will return 5 associated records per association.
     */
    #[JsonProperty('associations'), ArrayType([new Union(GetrecordsResponseRecordsItemAssociationsItemZero::class, GetrecordsResponseRecordsItemAssociationsItemOne::class)])]
    public ?array $associations;

    /**
     * Key-value pairs of attribute data for the object record. Each key is the attribute **key** (e.g., `company_name`, `engine_type`), not the attribute label (e.g., "Company Name", "Engine Type"). Only attributes that already exist in the object schema will be present.
     * For `category` or `multiple_category` attributes, the value is the option **key** (not the option label or option ID).
     *
     * @var ?array<string, mixed> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?DateTime $createdAt Timestamp when the object record was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * Identifiers for the object record. Supports `id` (singular, not `ids`) or `ext_id`.
     * - `ext_id`: Your external system's identifier for this record.
     * - `id`: Internal Brevo record ID.
     *
     * @var ?GetrecordsResponseRecordsItemIdentifiers $identifiers
     */
    #[JsonProperty('identifiers')]
    public ?GetrecordsResponseRecordsItemIdentifiers $identifiers;

    /**
     * @var ?DateTime $updatedAt Timestamp when the object record was last updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   associations?: ?array<(
     *    GetrecordsResponseRecordsItemAssociationsItemZero
     *   |GetrecordsResponseRecordsItemAssociationsItemOne
     * )>,
     *   attributes?: ?array<string, mixed>,
     *   createdAt?: ?DateTime,
     *   identifiers?: ?GetrecordsResponseRecordsItemIdentifiers,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->associations = $values['associations'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->identifiers = $values['identifiers'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
