<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RuleConditionResponse extends JsonSerializableType
{
    /**
     * @var ?array<RuleConditionResponse> $and Metric to indicate AND between rules
     */
    #[JsonProperty('and'), ArrayType([RuleConditionResponse::class])]
    public ?array $and;

    /**
     * @var ?ValueResponse $lhs Condition of the rule
     */
    #[JsonProperty('lhs')]
    public ?ValueResponse $lhs;

    /**
     * @var ?string $op Selected operator for the rule
     */
    #[JsonProperty('op')]
    public ?string $op;

    /**
     * @var ?array<RuleConditionResponse> $or Metric to indicate OR between rules
     */
    #[JsonProperty('or'), ArrayType([RuleConditionResponse::class])]
    public ?array $or;

    /**
     * @var ?ValueResponse $rhs Action of the rule
     */
    #[JsonProperty('rhs')]
    public ?ValueResponse $rhs;

    /**
     * @param array{
     *   and?: ?array<RuleConditionResponse>,
     *   lhs?: ?ValueResponse,
     *   op?: ?string,
     *   or?: ?array<RuleConditionResponse>,
     *   rhs?: ?ValueResponse,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->and = $values['and'] ?? null;
        $this->lhs = $values['lhs'] ?? null;
        $this->op = $values['op'] ?? null;
        $this->or = $values['or'] ?? null;
        $this->rhs = $values['rhs'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
