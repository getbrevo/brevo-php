<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SubscribeToLoyaltyProgramRequest extends JsonSerializableType
{
    /**
     * @var int $contactId Required contact ID; must be greater than 0.
     */
    #[JsonProperty('contactId')]
    public int $contactId;

    /**
     * @var ?string $creationDate Optional custom date-time format.
     */
    #[JsonProperty('creationDate')]
    public ?string $creationDate;

    /**
     * @var ?string $loyaltySubscriptionId Optional subscription ID (max length 64).
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @param array{
     *   contactId: int,
     *   creationDate?: ?string,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactId = $values['contactId'];
        $this->creationDate = $values['creationDate'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
    }
}
