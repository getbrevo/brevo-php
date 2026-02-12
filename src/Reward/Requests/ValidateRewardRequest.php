<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ValidateRewardRequest extends JsonSerializableType
{
    /**
     * @var ?string $attributedRewardId Unique identifier for the attributed reward
     */
    #[JsonProperty('attributedRewardId')]
    public ?string $attributedRewardId;

    /**
     * @var ?string $code Validation code for the reward
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $contactId Unique identifier for the contact
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Identifier for the loyalty subscription
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?string $pointOfSellId Identifier for the point of sale
     */
    #[JsonProperty('pointOfSellId')]
    public ?string $pointOfSellId;

    /**
     * @var ?string $rewardId Unique identifier for the reward
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @param array{
     *   attributedRewardId?: ?string,
     *   code?: ?string,
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     *   pointOfSellId?: ?string,
     *   rewardId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributedRewardId = $values['attributedRewardId'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->pointOfSellId = $values['pointOfSellId'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
    }
}
