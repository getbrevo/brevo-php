<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\CreateTierGroupRequestDowngradeStrategy;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Tier\Types\CreateTierGroupRequestUpgradeStrategy;

class CreateTierGroupRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<CreateTierGroupRequestDowngradeStrategy> $downgradeStrategy Select real_time to downgrade tier on real time balance updates. Select membership_anniversary to downgrade tier on subscription anniversary. Select tier_anniversary to downgrade tier on tier anniversary.
     */
    #[JsonProperty('downgradeStrategy')]
    public ?string $downgradeStrategy;

    /**
     * @var string $name Name of the tier group
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string> $tierOrder Order of the tiers in the group in ascending order
     */
    #[JsonProperty('tierOrder'), ArrayType(['string'])]
    public ?array $tierOrder;

    /**
     * @var ?value-of<CreateTierGroupRequestUpgradeStrategy> $upgradeStrategy Select real_time to upgrade tier on real time balance updates. Select membership_anniversary to upgrade tier on subscription anniversary. Select tier_anniversary to upgrade tier on tier anniversary.
     */
    #[JsonProperty('upgradeStrategy')]
    public ?string $upgradeStrategy;

    /**
     * @param array{
     *   name: string,
     *   downgradeStrategy?: ?value-of<CreateTierGroupRequestDowngradeStrategy>,
     *   tierOrder?: ?array<string>,
     *   upgradeStrategy?: ?value-of<CreateTierGroupRequestUpgradeStrategy>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->downgradeStrategy = $values['downgradeStrategy'] ?? null;
        $this->name = $values['name'];
        $this->tierOrder = $values['tierOrder'] ?? null;
        $this->upgradeStrategy = $values['upgradeStrategy'] ?? null;
    }
}
