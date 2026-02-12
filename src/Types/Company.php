<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Company Details
 */
class Company extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Company attributes with values
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?string $id Unique company id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<int> $linkedContactsIds Contact ids for contacts linked to this company
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var ?array<string> $linkedDealsIds Deals ids for companies linked to this company
     */
    #[JsonProperty('linkedDealsIds'), ArrayType(['string'])]
    public ?array $linkedDealsIds;

    /**
     * @param array{
     *   attributes?: ?array<string, mixed>,
     *   id?: ?string,
     *   linkedContactsIds?: ?array<int>,
     *   linkedDealsIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->linkedDealsIds = $values['linkedDealsIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
