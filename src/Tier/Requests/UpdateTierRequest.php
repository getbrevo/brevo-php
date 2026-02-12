<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\UpdateTierRequestAccessConditionsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Tier\Types\UpdateTierRequestTierRewardsItem;

class UpdateTierRequest extends JsonSerializableType
{
    /**
     * @var array<UpdateTierRequestAccessConditionsItem> $accessConditions
     */
    #[JsonProperty('accessConditions'), ArrayType([UpdateTierRequestAccessConditionsItem::class])]
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
     * @var array<UpdateTierRequestTierRewardsItem> $tierRewards
     */
    #[JsonProperty('tierRewards'), ArrayType([UpdateTierRequestTierRewardsItem::class])]
    public array $tierRewards;

    /**
     * @param array{
     *   accessConditions: array<UpdateTierRequestAccessConditionsItem>,
     *   name: string,
     *   tierRewards: array<UpdateTierRequestTierRewardsItem>,
     *   imageRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessConditions = $values['accessConditions'];
        $this->imageRef = $values['imageRef'] ?? null;
        $this->name = $values['name'];
        $this->tierRewards = $values['tierRewards'];
    }
}
