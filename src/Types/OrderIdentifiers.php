<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Identifies the contact associated with the order.
 */
class OrderIdentifiers extends JsonSerializableType
{
    /**
     * @var ?string $emailId Email of the contact associated with the order
     */
    #[JsonProperty('email_id')]
    public ?string $emailId;

    /**
     * @var ?string $extId ext_id associated with the order
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?string $loyaltySubscriptionId loyalty_subscription_id associated with the order
     */
    #[JsonProperty('loyalty_subscription_id')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?string $phoneId Phone number of the contact associated with the order
     */
    #[JsonProperty('phone_id')]
    public ?string $phoneId;

    /**
     * @param array{
     *   emailId?: ?string,
     *   extId?: ?string,
     *   loyaltySubscriptionId?: ?string,
     *   phoneId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->emailId = $values['emailId'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->phoneId = $values['phoneId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
