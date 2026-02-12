<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidRewardsRidResponse extends JsonSerializableType
{
    /**
     * @var ?int $attributionPerConsumer Maximum number of times a consumer can be attributed this reward
     */
    #[JsonProperty('attributionPerConsumer')]
    public ?int $attributionPerConsumer;

    /**
     * @var ?string $balanceDefinitionId Unique identifier for the balance definition
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?string $code Unique code for the reward
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $codeCount Total number of codes generated
     */
    #[JsonProperty('codeCount')]
    public ?int $codeCount;

    /**
     * @var ?string $codeGeneratorId Unique identifier for the code generator
     */
    #[JsonProperty('codeGeneratorId')]
    public ?string $codeGeneratorId;

    /**
     * @var ?string $codePoolId Unique identifier for the code pool
     */
    #[JsonProperty('codePoolId')]
    public ?string $codePoolId;

    /**
     * @var ?string $config Configuration settings for the reward
     */
    #[JsonProperty('config')]
    public ?string $config;

    /**
     * @var ?DateTime $createdAt Timestamp when the reward was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $disabledAt Disabled date of the reward
     */
    #[JsonProperty('disabledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $disabledAt;

    /**
     * @var ?DateTime $endDate End date of the reward validity
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $endDate;

    /**
     * @var ?DateTime $expirationDate Expiration date of the reward
     */
    #[JsonProperty('expirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expirationDate;

    /**
     * @var ?value-of<GetLoyaltyOfferProgramsPidRewardsRidResponseExpirationModifier> $expirationModifier Select startOfPeriod to configure rewards expiry on start of day/week/month/year. Select endOfPeriod to configure reward expiry on end of day/week/month/year, else select noModification
     */
    #[JsonProperty('expirationModifier')]
    public ?string $expirationModifier;

    /**
     * @var ?string $expirationUnit Unit of time for the rewards's availability (e.g., day/week/month/year).
     */
    #[JsonProperty('expirationUnit')]
    public ?string $expirationUnit;

    /**
     * @var ?int $expirationValue Number of days/weeks/month/year for reward expiry
     */
    #[JsonProperty('expirationValue')]
    public ?int $expirationValue;

    /**
     * @var ?GetLoyaltyOfferProgramsPidRewardsRidResponseGenerator $generator object
     */
    #[JsonProperty('generator')]
    public ?GetLoyaltyOfferProgramsPidRewardsRidResponseGenerator $generator;

    /**
     * @var ?string $id Unique identifier for the reward
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseLimitsItem> $limits Attribution / Redeem Limits for the reward
     */
    #[JsonProperty('limits'), ArrayType([GetLoyaltyOfferProgramsPidRewardsRidResponseLimitsItem::class])]
    public ?array $limits;

    /**
     * @var ?string $loyaltyProgramId Id of the loyalty program to which the current reward belongs to
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Additional data for reward definition
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $name Name of the reward
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseProductsItem> $products Selected products for reward definition
     */
    #[JsonProperty('products'), ArrayType([GetLoyaltyOfferProgramsPidRewardsRidResponseProductsItem::class])]
    public ?array $products;

    /**
     * @var ?string $publicDescription Public description for the reward
     */
    #[JsonProperty('publicDescription')]
    public ?string $publicDescription;

    /**
     * @var ?string $publicImage Public Image for the reward
     */
    #[JsonProperty('publicImage')]
    public ?string $publicImage;

    /**
     * @var ?string $publicName Public name for the reward
     */
    #[JsonProperty('publicName')]
    public ?string $publicName;

    /**
     * @var ?int $redeemPerConsumer Defines the redeem limit for the consumer
     */
    #[JsonProperty('redeemPerConsumer')]
    public ?int $redeemPerConsumer;

    /**
     * @var ?array<string> $redeemRules Rules defined to redeem a reward
     */
    #[JsonProperty('redeemRules'), ArrayType(['string'])]
    public ?array $redeemRules;

    /**
     * @var ?GetLoyaltyOfferProgramsPidRewardsRidResponseRewardConfigs $rewardConfigs object
     */
    #[JsonProperty('rewardConfigs')]
    public ?GetLoyaltyOfferProgramsPidRewardsRidResponseRewardConfigs $rewardConfigs;

    /**
     * @var ?GetLoyaltyOfferProgramsPidRewardsRidResponseRule $rule Rule to define the reward
     */
    #[JsonProperty('rule')]
    public ?GetLoyaltyOfferProgramsPidRewardsRidResponseRule $rule;

    /**
     * @var ?DateTime $startDate Start date of attribution of the reward
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $startDate;

    /**
     * @var ?string $subtractBalanceDefinitionId Id of the selected balance while redeeming / attributing a reward
     */
    #[JsonProperty('subtractBalanceDefinitionId')]
    public ?string $subtractBalanceDefinitionId;

    /**
     * @var ?string $subtractBalanceStrategy Strategy of the Balance while redeeming / attributing a reward
     */
    #[JsonProperty('subtractBalanceStrategy')]
    public ?string $subtractBalanceStrategy;

    /**
     * @var ?int $subtractBalanceValue Amount of balance to be selected while redeeming / attributing a reward
     */
    #[JsonProperty('subtractBalanceValue')]
    public ?int $subtractBalanceValue;

    /**
     * @var ?bool $subtractTotalBalance Value to indicate to subtract full balance or not
     */
    #[JsonProperty('subtractTotalBalance')]
    public ?bool $subtractTotalBalance;

    /**
     * @var ?int $totalAttribution Defines the limit to which a consumer can attribute a reward
     */
    #[JsonProperty('totalAttribution')]
    public ?int $totalAttribution;

    /**
     * @var ?int $totalRedeem Defines the limit to which a consumer can redeem a reward
     */
    #[JsonProperty('totalRedeem')]
    public ?int $totalRedeem;

    /**
     * @var ?string $triggerId Id of the Rule to be updated for that reward
     */
    #[JsonProperty('triggerId')]
    public ?string $triggerId;

    /**
     * @var ?string $unit Selected unit of the balance
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $updatedAt Timestamp for when this reward was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @var ?float $value Value of metric in selected config for reward definition
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @var ?string $valueType Type of config selected for reward definition
     */
    #[JsonProperty('valueType')]
    public ?string $valueType;

    /**
     * @param array{
     *   attributionPerConsumer?: ?int,
     *   balanceDefinitionId?: ?string,
     *   code?: ?string,
     *   codeCount?: ?int,
     *   codeGeneratorId?: ?string,
     *   codePoolId?: ?string,
     *   config?: ?string,
     *   createdAt?: ?DateTime,
     *   disabledAt?: ?DateTime,
     *   endDate?: ?DateTime,
     *   expirationDate?: ?DateTime,
     *   expirationModifier?: ?value-of<GetLoyaltyOfferProgramsPidRewardsRidResponseExpirationModifier>,
     *   expirationUnit?: ?string,
     *   expirationValue?: ?int,
     *   generator?: ?GetLoyaltyOfferProgramsPidRewardsRidResponseGenerator,
     *   id?: ?string,
     *   limits?: ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseLimitsItem>,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   name?: ?string,
     *   products?: ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseProductsItem>,
     *   publicDescription?: ?string,
     *   publicImage?: ?string,
     *   publicName?: ?string,
     *   redeemPerConsumer?: ?int,
     *   redeemRules?: ?array<string>,
     *   rewardConfigs?: ?GetLoyaltyOfferProgramsPidRewardsRidResponseRewardConfigs,
     *   rule?: ?GetLoyaltyOfferProgramsPidRewardsRidResponseRule,
     *   startDate?: ?DateTime,
     *   subtractBalanceDefinitionId?: ?string,
     *   subtractBalanceStrategy?: ?string,
     *   subtractBalanceValue?: ?int,
     *   subtractTotalBalance?: ?bool,
     *   totalAttribution?: ?int,
     *   totalRedeem?: ?int,
     *   triggerId?: ?string,
     *   unit?: ?string,
     *   updatedAt?: ?string,
     *   value?: ?float,
     *   valueType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributionPerConsumer = $values['attributionPerConsumer'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->codeCount = $values['codeCount'] ?? null;
        $this->codeGeneratorId = $values['codeGeneratorId'] ?? null;
        $this->codePoolId = $values['codePoolId'] ?? null;
        $this->config = $values['config'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->disabledAt = $values['disabledAt'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->expirationModifier = $values['expirationModifier'] ?? null;
        $this->expirationUnit = $values['expirationUnit'] ?? null;
        $this->expirationValue = $values['expirationValue'] ?? null;
        $this->generator = $values['generator'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->limits = $values['limits'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->products = $values['products'] ?? null;
        $this->publicDescription = $values['publicDescription'] ?? null;
        $this->publicImage = $values['publicImage'] ?? null;
        $this->publicName = $values['publicName'] ?? null;
        $this->redeemPerConsumer = $values['redeemPerConsumer'] ?? null;
        $this->redeemRules = $values['redeemRules'] ?? null;
        $this->rewardConfigs = $values['rewardConfigs'] ?? null;
        $this->rule = $values['rule'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->subtractBalanceDefinitionId = $values['subtractBalanceDefinitionId'] ?? null;
        $this->subtractBalanceStrategy = $values['subtractBalanceStrategy'] ?? null;
        $this->subtractBalanceValue = $values['subtractBalanceValue'] ?? null;
        $this->subtractTotalBalance = $values['subtractTotalBalance'] ?? null;
        $this->totalAttribution = $values['totalAttribution'] ?? null;
        $this->totalRedeem = $values['totalRedeem'] ?? null;
        $this->triggerId = $values['triggerId'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->valueType = $values['valueType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
