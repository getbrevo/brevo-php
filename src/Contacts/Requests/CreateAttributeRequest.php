<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\CreateAttributeRequestEnumerationItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Contacts\Types\CreateAttributeRequestType;

class CreateAttributeRequest extends JsonSerializableType
{
    /**
     * @var ?array<CreateAttributeRequestEnumerationItem> $enumeration List of values and labels that the attribute can take. **Use only if the attribute's category is "category"**. None of the category options can exceed max 200 characters. For example: **[{"value":1, "label":"male"}, {"value":2, "label":"female"}]**
     */
    #[JsonProperty('enumeration'), ArrayType([CreateAttributeRequestEnumerationItem::class])]
    public ?array $enumeration;

    /**
     * @var ?bool $isRecurring Type of the attribute. **Use only if the attribute's category is 'calculated' or 'global'**
     */
    #[JsonProperty('isRecurring')]
    public ?bool $isRecurring;

    /**
     * @var ?array<string> $multiCategoryOptions List of options you want to add for multiple-choice attribute. **Use only if the attribute's category is "normal" and attribute's type is "multiple-choice". None of the multicategory options can exceed max 200 characters.** For example: **["USA","INDIA"]**
     */
    #[JsonProperty('multiCategoryOptions'), ArrayType(['string'])]
    public ?array $multiCategoryOptions;

    /**
     * @var ?value-of<CreateAttributeRequestType> $type Type of the attribute. **Use only if the attribute's category is 'normal', 'category' or 'transactional'** Type **user and multiple-choice** is only available if the category is **normal** attribute Type **id** is only available if the category is **transactional** attribute Type **category** is only available if the category is **category** attribute
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $value Value of the attribute. **Use only if the attribute's category is 'calculated' or 'global'**
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   enumeration?: ?array<CreateAttributeRequestEnumerationItem>,
     *   isRecurring?: ?bool,
     *   multiCategoryOptions?: ?array<string>,
     *   type?: ?value-of<CreateAttributeRequestType>,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enumeration = $values['enumeration'] ?? null;
        $this->isRecurring = $values['isRecurring'] ?? null;
        $this->multiCategoryOptions = $values['multiCategoryOptions'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->value = $values['value'] ?? null;
    }
}
