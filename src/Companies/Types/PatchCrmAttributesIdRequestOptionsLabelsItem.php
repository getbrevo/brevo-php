<?php

namespace Brevo\Companies\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PatchCrmAttributesIdRequestOptionsLabelsItem extends JsonSerializableType
{
    /**
     * @var string $key Internal option identifier
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $value Display label for the option
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   key: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
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
