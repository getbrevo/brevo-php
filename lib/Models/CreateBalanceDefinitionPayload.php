<?php
/**
 * CreateBalanceDefinitionPayload
 *
 * PHP version 8.1
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Brevo API
 *
 * Brevo provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/brevo  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |   | 422  | Error. Unprocessable Entity |
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: contact@brevo.com
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brevo\Client\Models;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Brevo\Client\ObjectSerializer;

/**
 * CreateBalanceDefinitionPayload Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateBalanceDefinitionPayload extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createBalanceDefinitionPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'unit' => 'string',
        'description' => 'string',
        'meta' => 'object',
        'minAmount' => 'float',
        'maxAmount' => 'float',
        'maxCreditAmountLimit' => 'float',
        'maxDebitAmountLimit' => 'float',
        'balanceOptionAmountOvertakingStrategy' => 'string',
        'balanceOptionCreditRounding' => 'string',
        'balanceOptionDebitRounding' => 'string',
        'balanceAvailabilityDurationValue' => 'float',
        'balanceAvailabilityDurationUnit' => 'string',
        'balanceAvailabilityDurationModifier' => 'string',
        'balanceExpirationDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'unit' => null,
        'description' => null,
        'meta' => null,
        'minAmount' => null,
        'maxAmount' => null,
        'maxCreditAmountLimit' => null,
        'maxDebitAmountLimit' => null,
        'balanceOptionAmountOvertakingStrategy' => null,
        'balanceOptionCreditRounding' => null,
        'balanceOptionDebitRounding' => null,
        'balanceAvailabilityDurationValue' => null,
        'balanceAvailabilityDurationUnit' => null,
        'balanceAvailabilityDurationModifier' => null,
        'balanceExpirationDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
        'unit' => false,
        'description' => false,
        'meta' => false,
        'minAmount' => false,
        'maxAmount' => false,
        'maxCreditAmountLimit' => false,
        'maxDebitAmountLimit' => false,
        'balanceOptionAmountOvertakingStrategy' => false,
        'balanceOptionCreditRounding' => false,
        'balanceOptionDebitRounding' => false,
        'balanceAvailabilityDurationValue' => false,
        'balanceAvailabilityDurationUnit' => false,
        'balanceAvailabilityDurationModifier' => false,
        'balanceExpirationDate' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'unit' => 'unit',
        'description' => 'description',
        'meta' => 'meta',
        'minAmount' => 'minAmount',
        'maxAmount' => 'maxAmount',
        'maxCreditAmountLimit' => 'maxCreditAmountLimit',
        'maxDebitAmountLimit' => 'maxDebitAmountLimit',
        'balanceOptionAmountOvertakingStrategy' => 'balanceOptionAmountOvertakingStrategy',
        'balanceOptionCreditRounding' => 'balanceOptionCreditRounding',
        'balanceOptionDebitRounding' => 'balanceOptionDebitRounding',
        'balanceAvailabilityDurationValue' => 'balanceAvailabilityDurationValue',
        'balanceAvailabilityDurationUnit' => 'balanceAvailabilityDurationUnit',
        'balanceAvailabilityDurationModifier' => 'balanceAvailabilityDurationModifier',
        'balanceExpirationDate' => 'balanceExpirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'unit' => 'setUnit',
        'description' => 'setDescription',
        'meta' => 'setMeta',
        'minAmount' => 'setMinAmount',
        'maxAmount' => 'setMaxAmount',
        'maxCreditAmountLimit' => 'setMaxCreditAmountLimit',
        'maxDebitAmountLimit' => 'setMaxDebitAmountLimit',
        'balanceOptionAmountOvertakingStrategy' => 'setBalanceOptionAmountOvertakingStrategy',
        'balanceOptionCreditRounding' => 'setBalanceOptionCreditRounding',
        'balanceOptionDebitRounding' => 'setBalanceOptionDebitRounding',
        'balanceAvailabilityDurationValue' => 'setBalanceAvailabilityDurationValue',
        'balanceAvailabilityDurationUnit' => 'setBalanceAvailabilityDurationUnit',
        'balanceAvailabilityDurationModifier' => 'setBalanceAvailabilityDurationModifier',
        'balanceExpirationDate' => 'setBalanceExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'unit' => 'getUnit',
        'description' => 'getDescription',
        'meta' => 'getMeta',
        'minAmount' => 'getMinAmount',
        'maxAmount' => 'getMaxAmount',
        'maxCreditAmountLimit' => 'getMaxCreditAmountLimit',
        'maxDebitAmountLimit' => 'getMaxDebitAmountLimit',
        'balanceOptionAmountOvertakingStrategy' => 'getBalanceOptionAmountOvertakingStrategy',
        'balanceOptionCreditRounding' => 'getBalanceOptionCreditRounding',
        'balanceOptionDebitRounding' => 'getBalanceOptionDebitRounding',
        'balanceAvailabilityDurationValue' => 'getBalanceAvailabilityDurationValue',
        'balanceAvailabilityDurationUnit' => 'getBalanceAvailabilityDurationUnit',
        'balanceAvailabilityDurationModifier' => 'getBalanceAvailabilityDurationModifier',
        'balanceExpirationDate' => 'getBalanceExpirationDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    public const UNIT_POINTS = 'points';
    public const UNIT_EUR = 'EUR';
    public const UNIT_USD = 'USD';
    public const UNIT_MXN = 'MXN';
    public const UNIT_GBP = 'GBP';
    public const UNIT_INR = 'INR';
    public const UNIT_CAD = 'CAD';
    public const UNIT_SGD = 'SGD';
    public const UNIT_RON = 'RON';
    public const UNIT_JPY = 'JPY';
    public const UNIT_MYR = 'MYR';
    public const UNIT_CLP = 'CLP';
    public const UNIT_PEN = 'PEN';
    public const UNIT_MAD = 'MAD';
    public const UNIT_AUD = 'AUD';
    public const UNIT_CHF = 'CHF';
    public const UNIT_BRL = 'BRL';
    public const BALANCE_OPTION_AMOUNT_OVERTAKING_STRATEGY_STRICT = 'strict';
    public const BALANCE_OPTION_AMOUNT_OVERTAKING_STRATEGY_PARTIAL = 'partial';
    public const BALANCE_OPTION_CREDIT_ROUNDING_NATURAL = 'natural';
    public const BALANCE_OPTION_CREDIT_ROUNDING_UPPER = 'upper';
    public const BALANCE_OPTION_CREDIT_ROUNDING_LOWER = 'lower';
    public const BALANCE_OPTION_DEBIT_ROUNDING_NATURAL = 'natural';
    public const BALANCE_OPTION_DEBIT_ROUNDING_UPPER = 'upper';
    public const BALANCE_OPTION_DEBIT_ROUNDING_LOWER = 'lower';
    public const BALANCE_AVAILABILITY_DURATION_UNIT_DAY = 'day';
    public const BALANCE_AVAILABILITY_DURATION_UNIT_WEEK = 'week';
    public const BALANCE_AVAILABILITY_DURATION_UNIT_MONTH = 'month';
    public const BALANCE_AVAILABILITY_DURATION_UNIT_YEAR = 'year';
    public const BALANCE_AVAILABILITY_DURATION_MODIFIER_START_OF_PERIOD = 'startOfPeriod';
    public const BALANCE_AVAILABILITY_DURATION_MODIFIER_END_OF_PERIOD = 'endOfPeriod';
    public const BALANCE_AVAILABILITY_DURATION_MODIFIER_NO_MODIFICATION = 'noModification';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_POINTS,
            self::UNIT_EUR,
            self::UNIT_USD,
            self::UNIT_MXN,
            self::UNIT_GBP,
            self::UNIT_INR,
            self::UNIT_CAD,
            self::UNIT_SGD,
            self::UNIT_RON,
            self::UNIT_JPY,
            self::UNIT_MYR,
            self::UNIT_CLP,
            self::UNIT_PEN,
            self::UNIT_MAD,
            self::UNIT_AUD,
            self::UNIT_CHF,
            self::UNIT_BRL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceOptionAmountOvertakingStrategyAllowableValues()
    {
        return [
            self::BALANCE_OPTION_AMOUNT_OVERTAKING_STRATEGY_STRICT,
            self::BALANCE_OPTION_AMOUNT_OVERTAKING_STRATEGY_PARTIAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceOptionCreditRoundingAllowableValues()
    {
        return [
            self::BALANCE_OPTION_CREDIT_ROUNDING_NATURAL,
            self::BALANCE_OPTION_CREDIT_ROUNDING_UPPER,
            self::BALANCE_OPTION_CREDIT_ROUNDING_LOWER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceOptionDebitRoundingAllowableValues()
    {
        return [
            self::BALANCE_OPTION_DEBIT_ROUNDING_NATURAL,
            self::BALANCE_OPTION_DEBIT_ROUNDING_UPPER,
            self::BALANCE_OPTION_DEBIT_ROUNDING_LOWER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceAvailabilityDurationUnitAllowableValues()
    {
        return [
            self::BALANCE_AVAILABILITY_DURATION_UNIT_DAY,
            self::BALANCE_AVAILABILITY_DURATION_UNIT_WEEK,
            self::BALANCE_AVAILABILITY_DURATION_UNIT_MONTH,
            self::BALANCE_AVAILABILITY_DURATION_UNIT_YEAR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceAvailabilityDurationModifierAllowableValues()
    {
        return [
            self::BALANCE_AVAILABILITY_DURATION_MODIFIER_START_OF_PERIOD,
            self::BALANCE_AVAILABILITY_DURATION_MODIFIER_END_OF_PERIOD,
            self::BALANCE_AVAILABILITY_DURATION_MODIFIER_NO_MODIFICATION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('minAmount', $data ?? [], null);
        $this->setIfExists('maxAmount', $data ?? [], null);
        $this->setIfExists('maxCreditAmountLimit', $data ?? [], null);
        $this->setIfExists('maxDebitAmountLimit', $data ?? [], null);
        $this->setIfExists('balanceOptionAmountOvertakingStrategy', $data ?? [], 'strict');
        $this->setIfExists('balanceOptionCreditRounding', $data ?? [], 'natural');
        $this->setIfExists('balanceOptionDebitRounding', $data ?? [], 'natural');
        $this->setIfExists('balanceAvailabilityDurationValue', $data ?? [], null);
        $this->setIfExists('balanceAvailabilityDurationUnit', $data ?? [], 'day');
        $this->setIfExists('balanceAvailabilityDurationModifier', $data ?? [], 'noModification');
        $this->setIfExists('balanceExpirationDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit', must be one of '%s'",
                $this->container['unit'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBalanceOptionAmountOvertakingStrategyAllowableValues();
        if (!is_null($this->container['balanceOptionAmountOvertakingStrategy']) && !in_array($this->container['balanceOptionAmountOvertakingStrategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balanceOptionAmountOvertakingStrategy', must be one of '%s'",
                $this->container['balanceOptionAmountOvertakingStrategy'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBalanceOptionCreditRoundingAllowableValues();
        if (!is_null($this->container['balanceOptionCreditRounding']) && !in_array($this->container['balanceOptionCreditRounding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balanceOptionCreditRounding', must be one of '%s'",
                $this->container['balanceOptionCreditRounding'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBalanceOptionDebitRoundingAllowableValues();
        if (!is_null($this->container['balanceOptionDebitRounding']) && !in_array($this->container['balanceOptionDebitRounding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balanceOptionDebitRounding', must be one of '%s'",
                $this->container['balanceOptionDebitRounding'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBalanceAvailabilityDurationUnitAllowableValues();
        if (!is_null($this->container['balanceAvailabilityDurationUnit']) && !in_array($this->container['balanceAvailabilityDurationUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balanceAvailabilityDurationUnit', must be one of '%s'",
                $this->container['balanceAvailabilityDurationUnit'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBalanceAvailabilityDurationModifierAllowableValues();
        if (!is_null($this->container['balanceAvailabilityDurationModifier']) && !in_array($this->container['balanceAvailabilityDurationModifier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balanceAvailabilityDurationModifier', must be one of '%s'",
                $this->container['balanceAvailabilityDurationModifier'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name for the balance
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The unit for this balance definition.
     *
     * @return $this
     */
    public function setUnit(string $unit): static
    {
        if (is_null($unit)) {
            throw new InvalidArgumentException('non-nullable unit cannot be null');
        }
        $allowedValues = $this->getUnitAllowableValues();
        if (!in_array($unit, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit', must be one of '%s'",
                    $unit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for the balance
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object|null
     */
    public function getMeta(): ?object
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object|null $meta Additional metadata related to the balance definition.
     *
     * @return $this
     */
    public function setMeta(?object $meta): static
    {
        if (is_null($meta)) {
            throw new InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets minAmount
     *
     * @return float|null
     */
    public function getMinAmount(): ?float
    {
        return $this->container['minAmount'];
    }

    /**
     * Sets minAmount
     *
     * @param float|null $minAmount Minimum possible amount for balance
     *
     * @return $this
     */
    public function setMinAmount(?float $minAmount): static
    {
        if (is_null($minAmount)) {
            throw new InvalidArgumentException('non-nullable minAmount cannot be null');
        }
        $this->container['minAmount'] = $minAmount;

        return $this;
    }

    /**
     * Gets maxAmount
     *
     * @return float|null
     */
    public function getMaxAmount(): ?float
    {
        return $this->container['maxAmount'];
    }

    /**
     * Sets maxAmount
     *
     * @param float|null $maxAmount Maximum possible amount for balance
     *
     * @return $this
     */
    public function setMaxAmount(?float $maxAmount): static
    {
        if (is_null($maxAmount)) {
            throw new InvalidArgumentException('non-nullable maxAmount cannot be null');
        }
        $this->container['maxAmount'] = $maxAmount;

        return $this;
    }

    /**
     * Gets maxCreditAmountLimit
     *
     * @return float|null
     */
    public function getMaxCreditAmountLimit(): ?float
    {
        return $this->container['maxCreditAmountLimit'];
    }

    /**
     * Sets maxCreditAmountLimit
     *
     * @param float|null $maxCreditAmountLimit Maximum credit amount limit per operation
     *
     * @return $this
     */
    public function setMaxCreditAmountLimit(?float $maxCreditAmountLimit): static
    {
        if (is_null($maxCreditAmountLimit)) {
            throw new InvalidArgumentException('non-nullable maxCreditAmountLimit cannot be null');
        }
        $this->container['maxCreditAmountLimit'] = $maxCreditAmountLimit;

        return $this;
    }

    /**
     * Gets maxDebitAmountLimit
     *
     * @return float|null
     */
    public function getMaxDebitAmountLimit(): ?float
    {
        return $this->container['maxDebitAmountLimit'];
    }

    /**
     * Sets maxDebitAmountLimit
     *
     * @param float|null $maxDebitAmountLimit Maximum debit amount limit per operation
     *
     * @return $this
     */
    public function setMaxDebitAmountLimit(?float $maxDebitAmountLimit): static
    {
        if (is_null($maxDebitAmountLimit)) {
            throw new InvalidArgumentException('non-nullable maxDebitAmountLimit cannot be null');
        }
        $this->container['maxDebitAmountLimit'] = $maxDebitAmountLimit;

        return $this;
    }

    /**
     * Gets balanceOptionAmountOvertakingStrategy
     *
     * @return string|null
     */
    public function getBalanceOptionAmountOvertakingStrategy(): ?string
    {
        return $this->container['balanceOptionAmountOvertakingStrategy'];
    }

    /**
     * Sets balanceOptionAmountOvertakingStrategy
     *
     * @param string|null $balanceOptionAmountOvertakingStrategy Select partial to enable partial credit of balance if maximum balance limit is reaching. Select strict to reject the transaction if it will breach the max credit amount limit.
     *
     * @return $this
     */
    public function setBalanceOptionAmountOvertakingStrategy(?string $balanceOptionAmountOvertakingStrategy): static
    {
        if (is_null($balanceOptionAmountOvertakingStrategy)) {
            throw new InvalidArgumentException('non-nullable balanceOptionAmountOvertakingStrategy cannot be null');
        }
        $allowedValues = $this->getBalanceOptionAmountOvertakingStrategyAllowableValues();
        if (!in_array($balanceOptionAmountOvertakingStrategy, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balanceOptionAmountOvertakingStrategy', must be one of '%s'",
                    $balanceOptionAmountOvertakingStrategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balanceOptionAmountOvertakingStrategy'] = $balanceOptionAmountOvertakingStrategy;

        return $this;
    }

    /**
     * Gets balanceOptionCreditRounding
     *
     * @return string|null
     */
    public function getBalanceOptionCreditRounding(): ?string
    {
        return $this->container['balanceOptionCreditRounding'];
    }

    /**
     * Sets balanceOptionCreditRounding
     *
     * @param string|null $balanceOptionCreditRounding Select natural to round to nearest integer. Select upper to round up . Select lower to round down
     *
     * @return $this
     */
    public function setBalanceOptionCreditRounding(?string $balanceOptionCreditRounding): static
    {
        if (is_null($balanceOptionCreditRounding)) {
            throw new InvalidArgumentException('non-nullable balanceOptionCreditRounding cannot be null');
        }
        $allowedValues = $this->getBalanceOptionCreditRoundingAllowableValues();
        if (!in_array($balanceOptionCreditRounding, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balanceOptionCreditRounding', must be one of '%s'",
                    $balanceOptionCreditRounding,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balanceOptionCreditRounding'] = $balanceOptionCreditRounding;

        return $this;
    }

    /**
     * Gets balanceOptionDebitRounding
     *
     * @return string|null
     */
    public function getBalanceOptionDebitRounding(): ?string
    {
        return $this->container['balanceOptionDebitRounding'];
    }

    /**
     * Sets balanceOptionDebitRounding
     *
     * @param string|null $balanceOptionDebitRounding Select natural to round to nearest integer. Select upper to round up . Select lower to round down
     *
     * @return $this
     */
    public function setBalanceOptionDebitRounding(?string $balanceOptionDebitRounding): static
    {
        if (is_null($balanceOptionDebitRounding)) {
            throw new InvalidArgumentException('non-nullable balanceOptionDebitRounding cannot be null');
        }
        $allowedValues = $this->getBalanceOptionDebitRoundingAllowableValues();
        if (!in_array($balanceOptionDebitRounding, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balanceOptionDebitRounding', must be one of '%s'",
                    $balanceOptionDebitRounding,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balanceOptionDebitRounding'] = $balanceOptionDebitRounding;

        return $this;
    }

    /**
     * Gets balanceAvailabilityDurationValue
     *
     * @return float|null
     */
    public function getBalanceAvailabilityDurationValue(): ?float
    {
        return $this->container['balanceAvailabilityDurationValue'];
    }

    /**
     * Sets balanceAvailabilityDurationValue
     *
     * @param float|null $balanceAvailabilityDurationValue Number of days/weeks/month/year for balance expiry
     *
     * @return $this
     */
    public function setBalanceAvailabilityDurationValue(?float $balanceAvailabilityDurationValue): static
    {
        if (is_null($balanceAvailabilityDurationValue)) {
            throw new InvalidArgumentException('non-nullable balanceAvailabilityDurationValue cannot be null');
        }
        $this->container['balanceAvailabilityDurationValue'] = $balanceAvailabilityDurationValue;

        return $this;
    }

    /**
     * Gets balanceAvailabilityDurationUnit
     *
     * @return string|null
     */
    public function getBalanceAvailabilityDurationUnit(): ?string
    {
        return $this->container['balanceAvailabilityDurationUnit'];
    }

    /**
     * Sets balanceAvailabilityDurationUnit
     *
     * @param string|null $balanceAvailabilityDurationUnit Unit for balance expiry (e.g., day/week/month/year).
     *
     * @return $this
     */
    public function setBalanceAvailabilityDurationUnit(?string $balanceAvailabilityDurationUnit): static
    {
        if (is_null($balanceAvailabilityDurationUnit)) {
            throw new InvalidArgumentException('non-nullable balanceAvailabilityDurationUnit cannot be null');
        }
        $allowedValues = $this->getBalanceAvailabilityDurationUnitAllowableValues();
        if (!in_array($balanceAvailabilityDurationUnit, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balanceAvailabilityDurationUnit', must be one of '%s'",
                    $balanceAvailabilityDurationUnit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balanceAvailabilityDurationUnit'] = $balanceAvailabilityDurationUnit;

        return $this;
    }

    /**
     * Gets balanceAvailabilityDurationModifier
     *
     * @return string|null
     */
    public function getBalanceAvailabilityDurationModifier(): ?string
    {
        return $this->container['balanceAvailabilityDurationModifier'];
    }

    /**
     * Sets balanceAvailabilityDurationModifier
     *
     * @param string|null $balanceAvailabilityDurationModifier Select startOfPeriod to configure balance expiry on start of day/week/month/year. Select endOfPeriod to configure balance expiry on end of day/week/month/year, else select noModification
     *
     * @return $this
     */
    public function setBalanceAvailabilityDurationModifier(?string $balanceAvailabilityDurationModifier): static
    {
        if (is_null($balanceAvailabilityDurationModifier)) {
            throw new InvalidArgumentException('non-nullable balanceAvailabilityDurationModifier cannot be null');
        }
        $allowedValues = $this->getBalanceAvailabilityDurationModifierAllowableValues();
        if (!in_array($balanceAvailabilityDurationModifier, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balanceAvailabilityDurationModifier', must be one of '%s'",
                    $balanceAvailabilityDurationModifier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balanceAvailabilityDurationModifier'] = $balanceAvailabilityDurationModifier;

        return $this;
    }

    /**
     * Gets balanceExpirationDate
     *
     * @return string|null
     */
    public function getBalanceExpirationDate(): ?string
    {
        return $this->container['balanceExpirationDate'];
    }

    /**
     * Sets balanceExpirationDate
     *
     * @param string|null $balanceExpirationDate Date when the balance expires and can no longer be used, in dd/mm format. The balance will be expired when this date appears next in the calendar and only one of balanceExpirationDate or balance availability fields can be used.
     *
     * @return $this
     */
    public function setBalanceExpirationDate(?string $balanceExpirationDate): static
    {
        if (is_null($balanceExpirationDate)) {
            throw new InvalidArgumentException('non-nullable balanceExpirationDate cannot be null');
        }
        $this->container['balanceExpirationDate'] = $balanceExpirationDate;

        return $this;
    }
}


