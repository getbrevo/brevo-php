<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class BalanceDefinition extends JsonSerializableType
{
    /**
     * @var ?value-of<BalanceDefinitionBalanceAvailabilityDurationModifier> $balanceAvailabilityDurationModifier startOfPeriod depicts the balancy expiry on start of day/week/month/year. endOfPeriod depicts the balancy expiry on end of day/week/month/year
     */
    #[JsonProperty('balanceAvailabilityDurationModifier')]
    public ?string $balanceAvailabilityDurationModifier;

    /**
     * @var ?string $balanceAvailabilityDurationUnit Unit of time for the balance's availability (e.g., day/week/month/year).
     */
    #[JsonProperty('balanceAvailabilityDurationUnit')]
    public ?string $balanceAvailabilityDurationUnit;

    /**
     * @var ?int $balanceAvailabilityDurationValue Number of days/weeks/month/year for balance expiry
     */
    #[JsonProperty('balanceAvailabilityDurationValue')]
    public ?int $balanceAvailabilityDurationValue;

    /**
     * @var ?DateTime $balanceExpirationDate Date when the balance expires and can no longer be used, in dd/mm format. The balance will be expired when this date appears next in the calendar and only one of balanceExpirationDate or balance availability fields can be used.
     */
    #[JsonProperty('balanceExpirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $balanceExpirationDate;

    /**
     * @var ?string $balanceOptionAmountOvertakingStrategy Partial enables partial credit of balance if maximum balance limit is reaching. Strict enables rejection of transaction if it will breach the max credit amount limit.
     */
    #[JsonProperty('balanceOptionAmountOvertakingStrategy')]
    public ?string $balanceOptionAmountOvertakingStrategy;

    /**
     * @var ?string $balanceOptionCreditRounding Rounding strategy for credit transactions.
     */
    #[JsonProperty('balanceOptionCreditRounding')]
    public ?string $balanceOptionCreditRounding;

    /**
     * @var ?string $balanceOptionDebitRounding Rounding strategy for debit transactions.
     */
    #[JsonProperty('balanceOptionDebitRounding')]
    public ?string $balanceOptionDebitRounding;

    /**
     * @var ?DateTime $createdAt Timestamp of balance definition creation.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $deletedAt Timestamp of balance definition deletion (nullable).
     */
    #[JsonProperty('deletedAt')]
    public ?string $deletedAt;

    /**
     * @var ?string $description Short description of the balance definition.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $id Unique identifier for the balance definition.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $imageRef Optional image reference URL.
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var ?float $maxAmount Maximum allowable balance.
     */
    #[JsonProperty('maxAmount')]
    public ?float $maxAmount;

    /**
     * @var ?float $maxCreditAmountLimit Max credit allowed per operation.
     */
    #[JsonProperty('maxCreditAmountLimit')]
    public ?float $maxCreditAmountLimit;

    /**
     * @var ?float $maxDebitAmountLimit Max debit allowed per operation.
     */
    #[JsonProperty('maxDebitAmountLimit')]
    public ?float $maxDebitAmountLimit;

    /**
     * @var ?array<string, mixed> $meta Additional metadata for the balance definition.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?float $minAmount Minimum allowable balance.
     */
    #[JsonProperty('minAmount')]
    public ?float $minAmount;

    /**
     * @var ?string $name Name of the balance definition.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $unit Unit of balance (e.g., points, currency).
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $updatedAt Timestamp of the last update.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   balanceAvailabilityDurationModifier?: ?value-of<BalanceDefinitionBalanceAvailabilityDurationModifier>,
     *   balanceAvailabilityDurationUnit?: ?string,
     *   balanceAvailabilityDurationValue?: ?int,
     *   balanceExpirationDate?: ?DateTime,
     *   balanceOptionAmountOvertakingStrategy?: ?string,
     *   balanceOptionCreditRounding?: ?string,
     *   balanceOptionDebitRounding?: ?string,
     *   createdAt?: ?DateTime,
     *   deletedAt?: ?string,
     *   description?: ?string,
     *   id?: ?string,
     *   imageRef?: ?string,
     *   maxAmount?: ?float,
     *   maxCreditAmountLimit?: ?float,
     *   maxDebitAmountLimit?: ?float,
     *   meta?: ?array<string, mixed>,
     *   minAmount?: ?float,
     *   name?: ?string,
     *   unit?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceAvailabilityDurationModifier = $values['balanceAvailabilityDurationModifier'] ?? null;
        $this->balanceAvailabilityDurationUnit = $values['balanceAvailabilityDurationUnit'] ?? null;
        $this->balanceAvailabilityDurationValue = $values['balanceAvailabilityDurationValue'] ?? null;
        $this->balanceExpirationDate = $values['balanceExpirationDate'] ?? null;
        $this->balanceOptionAmountOvertakingStrategy = $values['balanceOptionAmountOvertakingStrategy'] ?? null;
        $this->balanceOptionCreditRounding = $values['balanceOptionCreditRounding'] ?? null;
        $this->balanceOptionDebitRounding = $values['balanceOptionDebitRounding'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->deletedAt = $values['deletedAt'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->imageRef = $values['imageRef'] ?? null;
        $this->maxAmount = $values['maxAmount'] ?? null;
        $this->maxCreditAmountLimit = $values['maxCreditAmountLimit'] ?? null;
        $this->maxDebitAmountLimit = $values['maxDebitAmountLimit'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->minAmount = $values['minAmount'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->unit = $values['unit'] ?? null;
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
