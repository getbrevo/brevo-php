<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAttributesResponseAttributesItemEnumerationItem extends JsonSerializableType
{
    /**
     * @var string $label Label of the "category" type attribute
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var int $value Numeric ID of the "category" type attribute value. Set to 0 when the raw value cannot be converted to an integer (for example non-numeric values such as "en" or "fr"). Refer to `valueStr` for the original string representation.
     */
    #[JsonProperty('value')]
    public int $value;

    /**
     * @var string $valueStr String representation of the "category" type attribute value. Always contains the original value as stored. Use this field when the attribute value is non-numeric (e.g. "en", "fr") or when you need the exact string form alongside the numeric `value`.
     */
    #[JsonProperty('valueStr')]
    public string $valueStr;

    /**
     * @param array{
     *   label: string,
     *   value: int,
     *   valueStr: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->label = $values['label'];
        $this->value = $values['value'];
        $this->valueStr = $values['valueStr'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
