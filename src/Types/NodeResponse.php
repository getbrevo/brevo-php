<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class NodeResponse extends JsonSerializableType
{
    /**
     * @var ?array<NodeResponse> $args array[object]
     */
    #[JsonProperty('args'), ArrayType([NodeResponse::class])]
    public ?array $args;

    /**
     * @var ?array<NodeResponse> $array Array values for rule definition
     */
    #[JsonProperty('array'), ArrayType([NodeResponse::class])]
    public ?array $array;

    /**
     * @var ?bool $boolean Boolean values for rule definition
     */
    #[JsonProperty('boolean')]
    public ?bool $boolean;

    /**
     * @var ?string $description Description for rule definition
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?float $float Float values for rule definition
     */
    #[JsonProperty('float')]
    public ?float $float;

    /**
     * @var ?int $int int64
     */
    #[JsonProperty('int')]
    public ?int $int;

    /**
     * @var ?string $op Operator selected for rule definition
     */
    #[JsonProperty('op')]
    public ?string $op;

    /**
     * @var ?string $string Boolean values for rule definition
     */
    #[JsonProperty('string')]
    public ?string $string;

    /**
     * @param array{
     *   args?: ?array<NodeResponse>,
     *   array?: ?array<NodeResponse>,
     *   boolean?: ?bool,
     *   description?: ?string,
     *   float?: ?float,
     *   int?: ?int,
     *   op?: ?string,
     *   string?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->args = $values['args'] ?? null;
        $this->array = $values['array'] ?? null;
        $this->boolean = $values['boolean'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->float = $values['float'] ?? null;
        $this->int = $values['int'] ?? null;
        $this->op = $values['op'] ?? null;
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
