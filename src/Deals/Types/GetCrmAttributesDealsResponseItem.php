<?php

namespace Brevo\Deals\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Deal attribute details
 */
class GetCrmAttributesDealsResponseItem extends JsonSerializableType
{
    /**
     * @var ?string $internalName Internal name of the attribute
     */
    #[JsonProperty('internalName')]
    public ?string $internalName;

    /**
     * @var ?string $attributeTypeName Type of the attribute
     */
    #[JsonProperty('attributeTypeName')]
    public ?string $attributeTypeName;

    /**
     * @var ?string $label Display label of the attribute
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?array<GetCrmAttributesDealsResponseItemAttributeOptionsItem> $attributeOptions Options for single-select or multi-choice attributes
     */
    #[JsonProperty('attributeOptions'), ArrayType([GetCrmAttributesDealsResponseItemAttributeOptionsItem::class])]
    public ?array $attributeOptions;

    /**
     * @var ?bool $isRequired Whether this attribute is required
     */
    #[JsonProperty('isRequired')]
    public ?bool $isRequired;

    /**
     * @var ?bool $isValueReadonly Whether this attribute value is read-only
     */
    #[JsonProperty('isValueReadonly')]
    public ?bool $isValueReadonly;

    /**
     * @param array{
     *   internalName?: ?string,
     *   attributeTypeName?: ?string,
     *   label?: ?string,
     *   attributeOptions?: ?array<GetCrmAttributesDealsResponseItemAttributeOptionsItem>,
     *   isRequired?: ?bool,
     *   isValueReadonly?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->internalName = $values['internalName'] ?? null;
        $this->attributeTypeName = $values['attributeTypeName'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->attributeOptions = $values['attributeOptions'] ?? null;
        $this->isRequired = $values['isRequired'] ?? null;
        $this->isValueReadonly = $values['isValueReadonly'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
