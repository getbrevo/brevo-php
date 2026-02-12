<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PatchCompaniesIdRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Attributes for company update
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?int $countryCode Country code if phone_number is passed in attributes.
     */
    #[JsonProperty('countryCode')]
    public ?int $countryCode;

    /**
     * @var ?array<int> $linkedContactsIds Warning - Using PATCH on linkedContactIds replaces the list of linked contacts. Omitted IDs will be removed.
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var ?array<string> $linkedDealsIds Warning - Using PATCH on linkedDealsIds replaces the list of linked contacts. Omitted IDs will be removed.
     */
    #[JsonProperty('linkedDealsIds'), ArrayType(['string'])]
    public ?array $linkedDealsIds;

    /**
     * @var ?string $name Name of company
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   attributes?: ?array<string, mixed>,
     *   countryCode?: ?int,
     *   linkedContactsIds?: ?array<int>,
     *   linkedDealsIds?: ?array<string>,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->linkedDealsIds = $values['linkedDealsIds'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
