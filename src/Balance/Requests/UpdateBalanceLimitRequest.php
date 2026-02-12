<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\UpdateBalanceLimitRequestConstraintType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Balance\Types\UpdateBalanceLimitRequestDurationUnit;
use Brevo\Balance\Types\UpdateBalanceLimitRequestTransactionType;

class UpdateBalanceLimitRequest extends JsonSerializableType
{
    /**
     * @var value-of<UpdateBalanceLimitRequestConstraintType> $constraintType Defines whether the limit applies to transaction count or amount.
     */
    #[JsonProperty('constraintType')]
    public string $constraintType;

    /**
     * @var value-of<UpdateBalanceLimitRequestDurationUnit> $durationUnit Unit of time for which the limit is applicable.
     */
    #[JsonProperty('durationUnit')]
    public string $durationUnit;

    /**
     * @var int $durationValue Number of time units for the balance limit.
     */
    #[JsonProperty('durationValue')]
    public int $durationValue;

    /**
     * @var ?bool $slidingSchedule Determines if the limit resets on a rolling schedule.
     */
    #[JsonProperty('slidingSchedule')]
    public ?bool $slidingSchedule;

    /**
     * @var value-of<UpdateBalanceLimitRequestTransactionType> $transactionType Specifies whether the limit applies to credit or debit transactions.
     */
    #[JsonProperty('transactionType')]
    public string $transactionType;

    /**
     * @var int $value Maximum allowed value for the specified constraint type.
     */
    #[JsonProperty('value')]
    public int $value;

    /**
     * @param array{
     *   constraintType: value-of<UpdateBalanceLimitRequestConstraintType>,
     *   durationUnit: value-of<UpdateBalanceLimitRequestDurationUnit>,
     *   durationValue: int,
     *   transactionType: value-of<UpdateBalanceLimitRequestTransactionType>,
     *   value: int,
     *   slidingSchedule?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->constraintType = $values['constraintType'];
        $this->durationUnit = $values['durationUnit'];
        $this->durationValue = $values['durationValue'];
        $this->slidingSchedule = $values['slidingSchedule'] ?? null;
        $this->transactionType = $values['transactionType'];
        $this->value = $values['value'];
    }
}
