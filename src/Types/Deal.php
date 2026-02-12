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
     * @var ?array<string, mixed> $attributes Deal attributes with values
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?string $id Unique deal id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<string> $linkedCompaniesIds Companies ids for companies linked to this deal
     */
    #[JsonProperty('linkedCompaniesIds'), ArrayType(['string'])]
    public ?array $linkedCompaniesIds;

    /**
     * @var ?array<int> $linkedContactsIds Contact ids for contacts linked to this deal
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @param array{
     *   attributes?: ?array<string, mixed>,
     *   id?: ?string,
     *   linkedCompaniesIds?: ?array<string>,
     *   linkedContactsIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->linkedCompaniesIds = $values['linkedCompaniesIds'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
