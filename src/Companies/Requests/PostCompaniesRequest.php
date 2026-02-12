<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PostCompaniesRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Attributes for company creation
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?int $countryCode Country code if phone_number is passed in attributes.
     */
    #[JsonProperty('countryCode')]
    public ?int $countryCode;

    /**
     * @var ?array<int> $linkedContactsIds Contact ids to be linked with company
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var ?array<string> $linkedDealsIds Deal ids to be linked with company
     */
    #[JsonProperty('linkedDealsIds'), ArrayType(['string'])]
    public ?array $linkedDealsIds;

    /**
     * @var string $name Name of company
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: string,
     *   attributes?: ?array<string, mixed>,
     *   countryCode?: ?int,
     *   linkedContactsIds?: ?array<int>,
     *   linkedDealsIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->linkedDealsIds = $values['linkedDealsIds'] ?? null;
        $this->name = $values['name'];
    }
}
