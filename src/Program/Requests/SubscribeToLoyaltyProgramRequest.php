<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class SubscribeToLoyaltyProgramRequest extends JsonSerializableType
{
    /**
     * @var int $contactId Required contact ID; must be greater than 0.
     */
    #[JsonProperty('contactId')]
    public int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Optional subscription ID (max length 64).
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?DateTime $creationDate Optional creation date in ISO 8601 format (YYYY-MM-DDThh:mm:ss.ffffff+HH:MM). Must be in the past.
     */
    #[JsonProperty('creationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $creationDate;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the subscription.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @param array{
     *   contactId: int,
     *   loyaltySubscriptionId?: ?string,
     *   creationDate?: ?DateTime,
     *   meta?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactId = $values['contactId'];
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->creationDate = $values['creationDate'] ?? null;
        $this->meta = $values['meta'] ?? null;
    }
}
