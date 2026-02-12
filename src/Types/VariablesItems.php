<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class VariablesItems extends JsonSerializableType
{
    /**
     * @var ?string $datatype
     */
    #[JsonProperty('datatype')]
    public ?string $datatype;

    /**
     * @var ?string $default
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   datatype?: ?string,
     *   default?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->datatype = $values['datatype'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
