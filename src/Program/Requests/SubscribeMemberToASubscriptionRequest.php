<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SubscribeMemberToASubscriptionRequest extends JsonSerializableType
{
    /**
     * @var ?int $contactId Required if LoyaltySubscriptionId is not provided, must be greater than 0
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Required if ContactId is not provided, max length 64
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var array<int> $memberContactIds Required, each item must be greater than or equal to 1
     */
    #[JsonProperty('memberContactIds'), ArrayType(['integer'])]
    public array $memberContactIds;

    /**
     * @param array{
     *   memberContactIds: array<int>,
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->memberContactIds = $values['memberContactIds'];
    }
}
