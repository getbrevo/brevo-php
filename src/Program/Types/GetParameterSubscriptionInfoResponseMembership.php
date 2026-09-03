<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

/**
 * Membership details of the subscription. Returned when the subscription could be resolved from the provided `contactId` or `loyaltySubscriptionId`.
 */
class GetParameterSubscriptionInfoResponseMembership extends JsonSerializableType
{
    /**
     * @var ?DateTime $createdAt Timestamp when the subscription was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $loyaltySubscriptionId Unique identifier of the loyalty subscription.
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?DateTime $updatedAt Timestamp when the subscription was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?DateTime,
     *   loyaltySubscriptionId?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
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
