<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Companies\Types\PostCrmAttributesRequestAttributeType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Companies\Types\PostCrmAttributesRequestObjectType;
use Brevo\Core\Types\ArrayType;

class PostCrmAttributesRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostCrmAttributesRequestAttributeType> $attributeType The type of attribute (must be one of the defined enums)
     */
    #[JsonProperty('attributeType')]
    public string $attributeType;

    /**
     * @var ?string $description A description of the attribute
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $label The label for the attribute (max 50 characters, cannot be empty)
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var value-of<PostCrmAttributesRequestObjectType> $objectType The type of object the attribute belongs to (prefilled with `companies`, mandatory)
     */
    #[JsonProperty('objectType')]
    public string $objectType;

    /**
     * @var ?array<string> $optionsLabels Options for multi-choice or single-select attributes
     */
    #[JsonProperty('optionsLabels'), ArrayType(['string'])]
    public ?array $optionsLabels;

    /**
     * @param array{
     *   attributeType: value-of<PostCrmAttributesRequestAttributeType>,
     *   label: string,
     *   objectType: value-of<PostCrmAttributesRequestObjectType>,
     *   description?: ?string,
     *   optionsLabels?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributeType = $values['attributeType'];
        $this->description = $values['description'] ?? null;
        $this->label = $values['label'];
        $this->objectType = $values['objectType'];
        $this->optionsLabels = $values['optionsLabels'] ?? null;
    }
}
