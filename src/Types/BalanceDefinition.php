<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class BalanceDefinition extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier for the balance definition.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Name of the balance definition.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description Short description of the balance definition.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $imageRef Optional image reference URL.
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var ?array<string, mixed> $meta Additional metadata for the balance definition.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?value-of<BalanceDefinitionUnit> $unit Unit of balance measurement.
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?float $minAmount Minimum allowable balance.
     */
    #[JsonProperty('minAmount')]
    public ?float $minAmount;

    /**
     * @var ?float $maxAmount Maximum allowable balance.
     */
    #[JsonProperty('maxAmount')]
    public ?float $maxAmount;

    /**
     * @var ?float $maxCreditAmountLimit Maximum credit allowed per operation.
     */
    #[JsonProperty('maxCreditAmountLimit')]
    public ?float $maxCreditAmountLimit;

    /**
     * @var ?float $maxDebitAmountLimit Maximum debit allowed per operation.
     */
    #[JsonProperty('maxDebitAmountLimit')]
    public ?float $maxDebitAmountLimit;

    /**
     * @var ?value-of<BalanceDefinitionBalanceOptionAmountOvertakingStrategy> $balanceOptionAmountOvertakingStrategy Partial enables partial credit of balance if maximum balance limit is reached. Strict enables rejection of a transaction if it will breach the max balance limit.
     */
    #[JsonProperty('balanceOptionAmountOvertakingStrategy')]
    public ?string $balanceOptionAmountOvertakingStrategy;

    /**
     * @var ?value-of<BalanceDefinitionBalanceOptionCreditRounding> $balanceOptionCreditRounding Rounding strategy for credit transactions.
     */
    #[JsonProperty('balanceOptionCreditRounding')]
    public ?string $balanceOptionCreditRounding;

    /**
     * @var ?value-of<BalanceDefinitionBalanceOptionDebitRounding> $balanceOptionDebitRounding Rounding strategy for debit transactions.
     */
    #[JsonProperty('balanceOptionDebitRounding')]
    public ?string $balanceOptionDebitRounding;

    /**
     * @var ?int $balanceAvailabilityDurationValue Number of time units before the balance expires.
     */
    #[JsonProperty('balanceAvailabilityDurationValue')]
    public ?int $balanceAvailabilityDurationValue;

    /**
     * @var ?value-of<BalanceDefinitionBalanceAvailabilityDurationUnit> $balanceAvailabilityDurationUnit Unit of time for the balance availability duration.
     */
    #[JsonProperty('balanceAvailabilityDurationUnit')]
    public ?string $balanceAvailabilityDurationUnit;

    /**
     * @var ?value-of<BalanceDefinitionBalanceAvailabilityDurationModifier> $balanceAvailabilityDurationModifier Modifier for balance availability duration. startOfPeriod causes expiry at the start of the period, endOfPeriod at the end. noModification uses the exact duration from the credit date.
     */
    #[JsonProperty('balanceAvailabilityDurationModifier')]
    public ?string $balanceAvailabilityDurationModifier;

    /**
     * @var ?string $balanceExpirationDate Fixed expiration date in dd/mm format. The balance expires when this date next appears in the calendar. Only one of balanceExpirationDate or balance availability duration fields can be used.
     */
    #[JsonProperty('balanceExpirationDate')]
    public ?string $balanceExpirationDate;

    /**
     * @var ?DateTime $createdAt Timestamp of balance definition creation.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp of the last update.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @var ?DateTime $deletedAt Timestamp of balance definition deletion (nullable).
     */
    #[JsonProperty('deletedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $deletedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     *   description?: ?string,
     *   imageRef?: ?string,
     *   meta?: ?array<string, mixed>,
     *   unit?: ?value-of<BalanceDefinitionUnit>,
     *   minAmount?: ?float,
     *   maxAmount?: ?float,
     *   maxCreditAmountLimit?: ?float,
     *   maxDebitAmountLimit?: ?float,
     *   balanceOptionAmountOvertakingStrategy?: ?value-of<BalanceDefinitionBalanceOptionAmountOvertakingStrategy>,
     *   balanceOptionCreditRounding?: ?value-of<BalanceDefinitionBalanceOptionCreditRounding>,
     *   balanceOptionDebitRounding?: ?value-of<BalanceDefinitionBalanceOptionDebitRounding>,
     *   balanceAvailabilityDurationValue?: ?int,
     *   balanceAvailabilityDurationUnit?: ?value-of<BalanceDefinitionBalanceAvailabilityDurationUnit>,
     *   balanceAvailabilityDurationModifier?: ?value-of<BalanceDefinitionBalanceAvailabilityDurationModifier>,
     *   balanceExpirationDate?: ?string,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     *   deletedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->imageRef = $values['imageRef'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->minAmount = $values['minAmount'] ?? null;
        $this->maxAmount = $values['maxAmount'] ?? null;
        $this->maxCreditAmountLimit = $values['maxCreditAmountLimit'] ?? null;
        $this->maxDebitAmountLimit = $values['maxDebitAmountLimit'] ?? null;
        $this->balanceOptionAmountOvertakingStrategy = $values['balanceOptionAmountOvertakingStrategy'] ?? null;
        $this->balanceOptionCreditRounding = $values['balanceOptionCreditRounding'] ?? null;
        $this->balanceOptionDebitRounding = $values['balanceOptionDebitRounding'] ?? null;
        $this->balanceAvailabilityDurationValue = $values['balanceAvailabilityDurationValue'] ?? null;
        $this->balanceAvailabilityDurationUnit = $values['balanceAvailabilityDurationUnit'] ?? null;
        $this->balanceAvailabilityDurationModifier = $values['balanceAvailabilityDurationModifier'] ?? null;
        $this->balanceExpirationDate = $values['balanceExpirationDate'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->deletedAt = $values['deletedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
