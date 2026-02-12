<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAttributesResponseAttributesItem extends JsonSerializableType
{
    /**
     * @var ?string $calculatedValue Calculated value formula
     */
    #[JsonProperty('calculatedValue')]
    public ?string $calculatedValue;

    /**
     * @var value-of<GetAttributesResponseAttributesItemCategory> $category Category of the attribute
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var ?array<GetAttributesResponseAttributesItemEnumerationItem> $enumeration Parameter only available for "category" type attributes.
     */
    #[JsonProperty('enumeration'), ArrayType([GetAttributesResponseAttributesItemEnumerationItem::class])]
    public ?array $enumeration;

    /**
     * @var ?array<string> $multiCategoryOptions Parameter only available for "multiple-choice" type attributes.
     */
    #[JsonProperty('multiCategoryOptions'), ArrayType(['string'])]
    public ?array $multiCategoryOptions;

    /**
     * @var string $name Name of the attribute
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<GetAttributesResponseAttributesItemType> $type Type of the attribute
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   category: value-of<GetAttributesResponseAttributesItemCategory>,
     *   name: string,
     *   calculatedValue?: ?string,
     *   enumeration?: ?array<GetAttributesResponseAttributesItemEnumerationItem>,
     *   multiCategoryOptions?: ?array<string>,
     *   type?: ?value-of<GetAttributesResponseAttributesItemType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->calculatedValue = $values['calculatedValue'] ?? null;
        $this->category = $values['category'];
        $this->enumeration = $values['enumeration'] ?? null;
        $this->multiCategoryOptions = $values['multiCategoryOptions'] ?? null;
        $this->name = $values['name'];
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
