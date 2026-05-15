<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Deal Details
 */
class Deal extends JsonSerializableType
{
    /**
     * @var ?string $id Unique deal id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<string, mixed> $attributes Deal attributes with values
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?array<int> $linkedContactsIds Contact ids for contacts linked to this deal
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var ?array<string> $linkedCompaniesIds Companies ids for companies linked to this deal
     */
    #[JsonProperty('linkedCompaniesIds'), ArrayType(['string'])]
    public ?array $linkedCompaniesIds;

    /**
     * @param array{
     *   id?: ?string,
     *   attributes?: ?array<string, mixed>,
     *   linkedContactsIds?: ?array<int>,
     *   linkedCompaniesIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->linkedCompaniesIds = $values['linkedCompaniesIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
