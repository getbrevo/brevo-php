<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class ValueResponse extends JsonSerializableType
{
    /**
     * @var ?array<ValueResponse> $array Array values to define the rule
     */
    #[JsonProperty('array'), ArrayType([ValueResponse::class])]
    public ?array $array;

    /**
     * @var ?bool $boolean Boolean values for rule definition
     */
    #[JsonProperty('boolean')]
    public ?bool $boolean;

    /**
     * @var ?string $contactProperty string
     */
    #[JsonProperty('contactProperty')]
    public ?string $contactProperty;

    /**
     * @var ?string $date Selected date for rule definition
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $eventProperty Selected event property for rule definition
     */
    #[JsonProperty('eventProperty')]
    public ?string $eventProperty;

    /**
     * @var ?NodeResponse $expression Created expression for rule definition
     */
    #[JsonProperty('expression')]
    public ?NodeResponse $expression;

    /**
     * @var ?float $number Boolean values for rule definition
     */
    #[JsonProperty('number')]
    public ?float $number;

    /**
     * @var ?string $string String values for rule definition
     */
    #[JsonProperty('string')]
    public ?string $string;

    /**
     * @param array{
     *   array?: ?array<ValueResponse>,
     *   boolean?: ?bool,
     *   contactProperty?: ?string,
     *   date?: ?string,
     *   eventProperty?: ?string,
     *   expression?: ?NodeResponse,
     *   number?: ?float,
     *   string?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->array = $values['array'] ?? null;
        $this->boolean = $values['boolean'] ?? null;
        $this->contactProperty = $values['contactProperty'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->eventProperty = $values['eventProperty'] ?? null;
        $this->expression = $values['expression'] ?? null;
        $this->number = $values['number'] ?? null;
        $this->string = $values['string'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
