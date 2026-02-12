<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class BalanceLimit extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId balance definition ID
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?string $constraintType Defines the type of constraint (e.g., transaction-based or amount-based).
     */
    #[JsonProperty('constraintType')]
    public ?string $constraintType;

    /**
     * @var string $createdAt Timestamp of when the balance limit was created.
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $durationUnit Time unit for the balance limit (day, week, month, year).
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?int $durationValue Number of time units the balance limit applies to.
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?string $id Unique identifier for the balance limit.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?bool $slidingSchedule Indicates if the limit resets periodically based on a sliding schedule.
     */
    #[JsonProperty('slidingSchedule')]
    public ?bool $slidingSchedule;

    /**
     * @var ?string $transactionType Specifies whether the limit applies to credit or debit transactions.
     */
    #[JsonProperty('transactionType')]
    public ?string $transactionType;

    /**
     * @var string $updatedAt Timestamp of the last update to the balance limit.
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var ?int $value The maximum allowed value for the defined constraint.
     */
    #[JsonProperty('value')]
    public ?int $value;

    /**
     * @param array{
     *   createdAt: string,
     *   updatedAt: string,
     *   balanceDefinitionId?: ?string,
     *   constraintType?: ?string,
     *   durationUnit?: ?string,
     *   durationValue?: ?int,
     *   id?: ?string,
     *   slidingSchedule?: ?bool,
     *   transactionType?: ?string,
     *   value?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->constraintType = $values['constraintType'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->durationUnit = $values['durationUnit'] ?? null;
        $this->durationValue = $values['durationValue'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->slidingSchedule = $values['slidingSchedule'] ?? null;
        $this->transactionType = $values['transactionType'] ?? null;
        $this->updatedAt = $values['updatedAt'];
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
