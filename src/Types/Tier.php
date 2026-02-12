<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class Tier extends JsonSerializableType
{
    /**
     * @var ?array<TierAccessConditionsItem> $accessConditions Conditions required to access this tier
     */
    #[JsonProperty('accessConditions'), ArrayType([TierAccessConditionsItem::class])]
    public ?array $accessConditions;

    /**
     * @var ?DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $groupId Associated group Id
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $imageRef Tier image reference
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var ?string $loyaltyProgramId Associated loyalty program Id
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $name Tier name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $tierId Tier id
     */
    #[JsonProperty('tierId')]
    public ?string $tierId;

    /**
     * @var ?array<TierTierRewardsItem> $tierRewards Rewards associated with this tier
     */
    #[JsonProperty('tierRewards'), ArrayType([TierTierRewardsItem::class])]
    public ?array $tierRewards;

    /**
     * @var ?DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   accessConditions?: ?array<TierAccessConditionsItem>,
     *   createdAt?: ?DateTime,
     *   groupId?: ?string,
     *   imageRef?: ?string,
     *   loyaltyProgramId?: ?string,
     *   name?: ?string,
     *   tierId?: ?string,
     *   tierRewards?: ?array<TierTierRewardsItem>,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->accessConditions = $values['accessConditions'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->imageRef = $values['imageRef'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->tierId = $values['tierId'] ?? null;
        $this->tierRewards = $values['tierRewards'] ?? null;
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
