<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidVouchersResponse extends JsonSerializableType
{
    /**
     * @var ?int $contactId Contact id associated with the current reward
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?array<GetLoyaltyOfferProgramsPidVouchersResponseContactRewardsItem> $contactRewards List of all the rewards for current contact
     */
    #[JsonProperty('contactRewards'), ArrayType([GetLoyaltyOfferProgramsPidVouchersResponseContactRewardsItem::class])]
    public ?array $contactRewards;

    /**
     * @var ?int $count Count of the rewards associated with the current contact
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?string $loyaltyProgramId Loyalty Program Id for the contact
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $loyaltySubscriptionId Loyalty Subscription Id for the contact
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @param array{
     *   contactId?: ?int,
     *   contactRewards?: ?array<GetLoyaltyOfferProgramsPidVouchersResponseContactRewardsItem>,
     *   count?: ?int,
     *   loyaltyProgramId?: ?string,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->contactRewards = $values['contactRewards'] ?? null;
        $this->count = $values['count'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
