<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\UpdateAttributeRequestEnumerationItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpdateAttributeRequest extends JsonSerializableType
{
    /**
     * @var ?array<UpdateAttributeRequestEnumerationItem> $enumeration List of the values and labels that the attribute can take. **Use only if the attribute's category is "category"** None of the category options can exceed max 200 characters. For example, **[{"value":1, "label":"male"}, {"value":2, "label":"female"}]**
     */
    #[JsonProperty('enumeration'), ArrayType([UpdateAttributeRequestEnumerationItem::class])]
    public ?array $enumeration;

    /**
     * @var ?array<string> $multiCategoryOptions Use this option to add multiple-choice attributes options only if the attribute's category is "normal". **This option is specifically designed for updating multiple-choice attributes. None of the multicategory options can exceed max 200 characters.**. For example: **["USA","INDIA"]**
     */
    #[JsonProperty('multiCategoryOptions'), ArrayType(['string'])]
    public ?array $multiCategoryOptions;

    /**
     * @var ?string $value Value of the attribute to update. **Use only if the attribute's category is 'calculated' or 'global'**
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   enumeration?: ?array<UpdateAttributeRequestEnumerationItem>,
     *   multiCategoryOptions?: ?array<string>,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enumeration = $values['enumeration'] ?? null;
        $this->multiCategoryOptions = $values['multiCategoryOptions'] ?? null;
        $this->value = $values['value'] ?? null;
    }
}
