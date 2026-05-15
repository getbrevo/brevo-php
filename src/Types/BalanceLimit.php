<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class BalanceLimit extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier for the balance limit.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $balanceDefinitionId Balance definition ID.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?value-of<BalanceLimitTransactionType> $transactionType Specifies whether the limit applies to credit or debit transactions.
     */
    #[JsonProperty('transactionType')]
    public ?string $transactionType;

    /**
     * @var ?value-of<BalanceLimitConstraintType> $constraintType Defines the type of constraint (transaction count or amount).
     */
    #[JsonProperty('constraintType')]
    public ?string $constraintType;

    /**
     * @var ?int $durationValue Number of time units the balance limit applies to.
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?value-of<BalanceLimitDurationUnit> $durationUnit Time unit for the balance limit.
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?float $value The maximum allowed value for the defined constraint.
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @var ?bool $slidingSchedule Indicates if the limit resets periodically based on a sliding schedule.
     */
    #[JsonProperty('slidingSchedule')]
    public ?bool $slidingSchedule;

    /**
     * @var ?DateTime $createdAt Timestamp of when the balance limit was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp of the last update to the balance limit.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   balanceDefinitionId?: ?string,
     *   transactionType?: ?value-of<BalanceLimitTransactionType>,
     *   constraintType?: ?value-of<BalanceLimitConstraintType>,
     *   durationValue?: ?int,
     *   durationUnit?: ?value-of<BalanceLimitDurationUnit>,
     *   value?: ?float,
     *   slidingSchedule?: ?bool,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->transactionType = $values['transactionType'] ?? null;
        $this->constraintType = $values['constraintType'] ?? null;
        $this->durationValue = $values['durationValue'] ?? null;
        $this->durationUnit = $values['durationUnit'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->slidingSchedule = $values['slidingSchedule'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
