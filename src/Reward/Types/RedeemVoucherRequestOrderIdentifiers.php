<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class RedeemVoucherRequestOrderIdentifiers extends JsonSerializableType
{
    /**
     * @var ?string $extId External identifier for the order
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?string $loyaltySubscriptionId Identifier for the loyalty subscription
     */
    #[JsonProperty('loyalty_subscription_id')]
    public ?string $loyaltySubscriptionId;

    /**
     * @param array{
     *   extId?: ?string,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extId = $values['extId'] ?? null;
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
