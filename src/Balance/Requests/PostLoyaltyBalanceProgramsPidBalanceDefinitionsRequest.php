<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationModifier;
use Brevo\Core\Json\JsonProperty;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationUnit;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionAmountOvertakingStrategy;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionCreditRounding;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionDebitRounding;
use Brevo\Core\Types\ArrayType;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit;

class PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationModifier> $balanceAvailabilityDurationModifier Defines when the balance expires within the selected duration.
     */
    #[JsonProperty('balanceAvailabilityDurationModifier')]
    public ?string $balanceAvailabilityDurationModifier;

    /**
     * @var ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationUnit> $balanceAvailabilityDurationUnit Unit of time for balance validity.
     */
    #[JsonProperty('balanceAvailabilityDurationUnit')]
    public ?string $balanceAvailabilityDurationUnit;

    /**
     * @var ?int $balanceAvailabilityDurationValue Number of time units before the balance expires.
     */
    #[JsonProperty('balanceAvailabilityDurationValue')]
    public ?int $balanceAvailabilityDurationValue;

    /**
     * @var ?DateTime $balanceExpirationDate Fixed expiration date (`dd/mm` format) as an alternative to duration-based expiry.
     */
    #[JsonProperty('balanceExpirationDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $balanceExpirationDate;

    /**
     * @var ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionAmountOvertakingStrategy> $balanceOptionAmountOvertakingStrategy Defines whether partial credit is allowed when reaching max balance.
     */
    #[JsonProperty('balanceOptionAmountOvertakingStrategy')]
    public ?string $balanceOptionAmountOvertakingStrategy;

    /**
     * @var ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionCreditRounding> $balanceOptionCreditRounding Defines rounding strategy for credit transactions.
     */
    #[JsonProperty('balanceOptionCreditRounding')]
    public ?string $balanceOptionCreditRounding;

    /**
     * @var ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionDebitRounding> $balanceOptionDebitRounding Defines rounding strategy for debit transactions.
     */
    #[JsonProperty('balanceOptionDebitRounding')]
    public ?string $balanceOptionDebitRounding;

    /**
     * @var ?string $description Short description of the balance definition.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $imageRef URL of an optional image reference.
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var ?float $maxAmount Maximum allowable balance amount.
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
     * @var ?array<string, mixed> $meta Additional metadata for the balance definition.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?float $minAmount Minimum allowable balance amount.
     */
    #[JsonProperty('minAmount')]
    public ?float $minAmount;

    /**
     * @var string $name Name of the balance definition.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit> $unit Unit of balance measurement.
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @param array{
     *   name: string,
     *   unit: value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit>,
     *   balanceAvailabilityDurationModifier?: ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationModifier>,
     *   balanceAvailabilityDurationUnit?: ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationUnit>,
     *   balanceAvailabilityDurationValue?: ?int,
     *   balanceExpirationDate?: ?DateTime,
     *   balanceOptionAmountOvertakingStrategy?: ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionAmountOvertakingStrategy>,
     *   balanceOptionCreditRounding?: ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionCreditRounding>,
     *   balanceOptionDebitRounding?: ?value-of<PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionDebitRounding>,
     *   description?: ?string,
     *   imageRef?: ?string,
     *   maxAmount?: ?float,
     *   maxCreditAmountLimit?: ?float,
     *   maxDebitAmountLimit?: ?float,
     *   meta?: ?array<string, mixed>,
     *   minAmount?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->balanceAvailabilityDurationModifier = $values['balanceAvailabilityDurationModifier'] ?? null;
        $this->balanceAvailabilityDurationUnit = $values['balanceAvailabilityDurationUnit'] ?? null;
        $this->balanceAvailabilityDurationValue = $values['balanceAvailabilityDurationValue'] ?? null;
        $this->balanceExpirationDate = $values['balanceExpirationDate'] ?? null;
        $this->balanceOptionAmountOvertakingStrategy = $values['balanceOptionAmountOvertakingStrategy'] ?? null;
        $this->balanceOptionCreditRounding = $values['balanceOptionCreditRounding'] ?? null;
        $this->balanceOptionDebitRounding = $values['balanceOptionDebitRounding'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->imageRef = $values['imageRef'] ?? null;
        $this->maxAmount = $values['maxAmount'] ?? null;
        $this->maxCreditAmountLimit = $values['maxCreditAmountLimit'] ?? null;
        $this->maxDebitAmountLimit = $values['maxDebitAmountLimit'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->minAmount = $values['minAmount'] ?? null;
        $this->name = $values['name'];
        $this->unit = $values['unit'];
    }
}
