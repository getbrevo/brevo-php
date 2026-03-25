<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\UpdateTierGroupRequestDowngradeStrategy;
use Brevo\Core\Json\JsonProperty;
use Brevo\Tier\Types\UpdateTierGroupRequestMeta;
use Brevo\Core\Types\ArrayType;
use Brevo\Tier\Types\UpdateTierGroupRequestUpgradeStrategy;

class UpdateTierGroupRequest extends JsonSerializableType
{
    /**
     * @var value-of<UpdateTierGroupRequestDowngradeStrategy> $downgradeStrategy Select real_time to downgrade tier on real time balance updates. Select membership_anniversary to downgrade tier on subscription anniversary. Select tier_anniversary to downgrade tier on tier anniversary.
     */
    #[JsonProperty('downgradeStrategy')]
    public string $downgradeStrategy;

    /**
     * @var string $name Name of the tier group
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?UpdateTierGroupRequestMeta $meta Additional metadata for the tier group.
     */
    #[JsonProperty('meta')]
    public ?UpdateTierGroupRequestMeta $meta;

    /**
     * @var array<string> $tierOrder Order of the tiers in the group in ascending order
     */
    #[JsonProperty('tierOrder'), ArrayType(['string'])]
    public array $tierOrder;

    /**
     * @var value-of<UpdateTierGroupRequestUpgradeStrategy> $upgradeStrategy Select real_time to upgrade tier on real time balance updates. Select membership_anniversary to upgrade tier on subscription anniversary. Select tier_anniversary to upgrade tier on tier anniversary.
     */
    #[JsonProperty('upgradeStrategy')]
    public string $upgradeStrategy;

    /**
     * @param array{
     *   downgradeStrategy: value-of<UpdateTierGroupRequestDowngradeStrategy>,
     *   name: string,
     *   tierOrder: array<string>,
     *   upgradeStrategy: value-of<UpdateTierGroupRequestUpgradeStrategy>,
     *   meta?: ?UpdateTierGroupRequestMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->downgradeStrategy = $values['downgradeStrategy'];
        $this->name = $values['name'];
        $this->meta = $values['meta'] ?? null;
        $this->tierOrder = $values['tierOrder'];
        $this->upgradeStrategy = $values['upgradeStrategy'];
    }
}
