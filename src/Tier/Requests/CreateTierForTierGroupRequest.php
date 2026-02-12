<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\CreateTierForTierGroupRequestAccessConditionsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Tier\Types\CreateTierForTierGroupRequestTierRewardsItem;

class CreateTierForTierGroupRequest extends JsonSerializableType
{
    /**
     * @var array<CreateTierForTierGroupRequestAccessConditionsItem> $accessConditions
     */
    #[JsonProperty('accessConditions'), ArrayType([CreateTierForTierGroupRequestAccessConditionsItem::class])]
    public array $accessConditions;

    /**
     * @var ?string $imageRef Image of the tier
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var string $name Name of the tier to be created
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<CreateTierForTierGroupRequestTierRewardsItem> $tierRewards
     */
    #[JsonProperty('tierRewards'), ArrayType([CreateTierForTierGroupRequestTierRewardsItem::class])]
    public ?array $tierRewards;

    /**
     * @param array{
     *   accessConditions: array<CreateTierForTierGroupRequestAccessConditionsItem>,
     *   name: string,
     *   imageRef?: ?string,
     *   tierRewards?: ?array<CreateTierForTierGroupRequestTierRewardsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessConditions = $values['accessConditions'];
        $this->imageRef = $values['imageRef'] ?? null;
        $this->name = $values['name'];
        $this->tierRewards = $values['tierRewards'] ?? null;
    }
}
