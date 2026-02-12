<?php

namespace Brevo\Companies\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * List of attributes
 */
class GetCrmAttributesCompaniesResponseItem extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $attributeOptions
     */
    #[JsonProperty('attributeOptions'), ArrayType([['string' => 'mixed']])]
    public ?array $attributeOptions;

    /**
     * @var ?string $attributeTypeName
     */
    #[JsonProperty('attributeTypeName')]
    public ?string $attributeTypeName;

    /**
     * @var ?string $internalName
     */
    #[JsonProperty('internalName')]
    public ?string $internalName;

    /**
     * @var ?bool $isRequired
     */
    #[JsonProperty('isRequired')]
    public ?bool $isRequired;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @param array{
     *   attributeOptions?: ?array<array<string, mixed>>,
     *   attributeTypeName?: ?string,
     *   internalName?: ?string,
     *   isRequired?: ?bool,
     *   label?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributeOptions = $values['attributeOptions'] ?? null;
        $this->attributeTypeName = $values['attributeTypeName'] ?? null;
        $this->internalName = $values['internalName'] ?? null;
        $this->isRequired = $values['isRequired'] ?? null;
        $this->label = $values['label'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
