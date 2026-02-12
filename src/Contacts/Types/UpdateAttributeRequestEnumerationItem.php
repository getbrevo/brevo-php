<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateAttributeRequestEnumerationItem extends JsonSerializableType
{
    /**
     * @var string $label Label of the value
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var int $value Id of the value
     */
    #[JsonProperty('value')]
    public int $value;

    /**
     * @param array{
     *   label: string,
     *   value: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->label = $values['label'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
