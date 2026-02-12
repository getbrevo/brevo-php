<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\RuleConditionResponse;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidRewardsRidResponseRule extends JsonSerializableType
{
    /**
     * @var ?RuleConditionResponse $condition Selected rule condition
     */
    #[JsonProperty('condition')]
    public ?RuleConditionResponse $condition;

    /**
     * @var ?string $createdAt Timestamp when the rule was created
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $description Description of the rule
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?GetLoyaltyOfferProgramsPidRewardsRidResponseRuleEvent $event Selected event in the rule
     */
    #[JsonProperty('event')]
    public ?GetLoyaltyOfferProgramsPidRewardsRidResponseRuleEvent $event;

    /**
     * @var ?bool $isInternal Metric to identify if it's an internal rule or not
     */
    #[JsonProperty('isInternal')]
    public ?bool $isInternal;

    /**
     * @var ?string $loyaltyProgramId Loyalty Program id to which current rule is associated
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?int $loyaltyVersionId Loyalty Version id to which current rule is associated
     */
    #[JsonProperty('loyaltyVersionId')]
    public ?int $loyaltyVersionId;

    /**
     * @var ?array<string, mixed> $meta Additional data to define the rule
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $name Rule name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItem> $results Results of the rule definition
     */
    #[JsonProperty('results'), ArrayType([GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItem::class])]
    public ?array $results;

    /**
     * @var ?string $ruleId Unique identifier for the rule
     */
    #[JsonProperty('ruleId')]
    public ?string $ruleId;

    /**
     * @var ?string $ruleType Type of the rule
     */
    #[JsonProperty('ruleType')]
    public ?string $ruleType;

    /**
     * @var ?string $updatedAt Timestamp when the rule was updated
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   condition?: ?RuleConditionResponse,
     *   createdAt?: ?string,
     *   description?: ?string,
     *   event?: ?GetLoyaltyOfferProgramsPidRewardsRidResponseRuleEvent,
     *   isInternal?: ?bool,
     *   loyaltyProgramId?: ?string,
     *   loyaltyVersionId?: ?int,
     *   meta?: ?array<string, mixed>,
     *   name?: ?string,
     *   results?: ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItem>,
     *   ruleId?: ?string,
     *   ruleType?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->condition = $values['condition'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->event = $values['event'] ?? null;
        $this->isInternal = $values['isInternal'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->loyaltyVersionId = $values['loyaltyVersionId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->results = $values['results'] ?? null;
        $this->ruleId = $values['ruleId'] ?? null;
        $this->ruleType = $values['ruleType'] ?? null;
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
