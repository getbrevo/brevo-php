<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class BeginTransactionRequest extends JsonSerializableType
{
    /**
     * @var ?string $loyaltySubscriptionId Unique identifier for the loyalty subscription (required unless `contactId` is provided).
     */
    #[JsonProperty('LoyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var float $amount Transaction amount (must be provided).
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var ?bool $autoComplete Whether the transaction should be automatically completed.
     */
    #[JsonProperty('autoComplete')]
    public ?bool $autoComplete;

    /**
     * @var string $balanceDefinitionId Unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public string $balanceDefinitionId;

    /**
     * @var ?int $balanceExpiryInMinutes Optional expiry time for the balance in minutes (must be greater than 0 if provided).
     */
    #[JsonProperty('balanceExpiryInMinutes')]
    public ?int $balanceExpiryInMinutes;

    /**
     * @var ?int $contactId Unique identifier of the contact involved in the transaction (required unless `LoyaltySubscriptionId` is provided).
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $eventTime Optional timestamp specifying when the transaction occurred.
     */
    #[JsonProperty('eventTime')]
    public ?string $eventTime;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the transaction.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?int $ttl Optional time-to-live for the transaction (must be greater than 0 if provided).
     */
    #[JsonProperty('ttl')]
    public ?int $ttl;

    /**
     * @param array{
     *   amount: float,
     *   balanceDefinitionId: string,
     *   loyaltySubscriptionId?: ?string,
     *   autoComplete?: ?bool,
     *   balanceExpiryInMinutes?: ?int,
     *   contactId?: ?int,
     *   eventTime?: ?string,
     *   meta?: ?array<string, mixed>,
     *   ttl?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->amount = $values['amount'];
        $this->autoComplete = $values['autoComplete'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
        $this->balanceExpiryInMinutes = $values['balanceExpiryInMinutes'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->eventTime = $values['eventTime'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->ttl = $values['ttl'] ?? null;
    }
}
