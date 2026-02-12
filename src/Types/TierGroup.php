<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class TierGroup extends JsonSerializableType
{
    /**
     * @var ?DateTime $createdAt Timestamp when the tier group was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?value-of<TierGroupDowngradeStrategy> $downgradeStrategy Select real_time to downgrade tier on real time balance updates. Select membership_anniversary to downgrade tier on subscription anniversary. Select tier_anniversary to downgrade tier on tier anniversary.
     */
    #[JsonProperty('downgradeStrategy')]
    public ?string $downgradeStrategy;

    /**
     * @var ?string $id Tier group unique identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Associated loyalty program Id
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $name Tier group name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string> $tierOrder Order of the tiers in the group in ascending order
     */
    #[JsonProperty('tierOrder'), ArrayType(['string'])]
    public ?array $tierOrder;

    /**
     * @var ?DateTime $updatedAt Timestamp when the tier group was last updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @var ?value-of<TierGroupUpgradeStrategy> $upgradeStrategy Select real_time to upgrade tier on real time balance updates. Select membership_anniversary to upgrade tier on subscription anniversary. Select tier_anniversary to upgrade tier on tier anniversary.
     */
    #[JsonProperty('upgradeStrategy')]
    public ?string $upgradeStrategy;

    /**
     * @param array{
     *   createdAt?: ?DateTime,
     *   downgradeStrategy?: ?value-of<TierGroupDowngradeStrategy>,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   name?: ?string,
     *   tierOrder?: ?array<string>,
     *   updatedAt?: ?DateTime,
     *   upgradeStrategy?: ?value-of<TierGroupUpgradeStrategy>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->downgradeStrategy = $values['downgradeStrategy'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->tierOrder = $values['tierOrder'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->upgradeStrategy = $values['upgradeStrategy'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
