<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Balance\Types\BeginTransactionRequestTransactionType;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class BeginTransactionRequest extends JsonSerializableType
{
    /**
     * @var float $amount Transaction amount. A positive value creates a credit transaction and a negative value creates a debit transaction (unless transactionType is explicitly provided).
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var ?value-of<BeginTransactionRequestTransactionType> $transactionType Explicit transaction type. If not provided, the type is inferred from the sign of the amount (positive = credit, negative = debit).
     */
    #[JsonProperty('transactionType')]
    public ?string $transactionType;

    /**
     * @var string $balanceDefinitionId Unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public string $balanceDefinitionId;

    /**
     * @var ?int $contactId Unique identifier of the contact involved in the transaction. Required unless `LoyaltySubscriptionId` is provided.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Unique identifier for the loyalty subscription. Required unless `contactId` is provided.
     */
    #[JsonProperty('LoyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the transaction.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?int $ttl Time-to-live for the transaction in seconds. Must be at least 10 seconds if provided.
     */
    #[JsonProperty('ttl')]
    public ?int $ttl;

    /**
     * @var ?DateTime $eventTime Timestamp specifying when the transaction event occurred (ISO 8601 / RFC 3339 format).
     */
    #[JsonProperty('eventTime'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $eventTime;

    /**
     * @var ?bool $autoComplete Whether the transaction should be automatically completed.
     */
    #[JsonProperty('autoComplete')]
    public ?bool $autoComplete;

    /**
     * @var ?int $balanceExpiryInMinutes Expiry time for the balance in minutes. Must be greater than 0 if provided. Only applicable when autoComplete is true.
     */
    #[JsonProperty('balanceExpiryInMinutes')]
    public ?int $balanceExpiryInMinutes;

    /**
     * @param array{
     *   amount: float,
     *   balanceDefinitionId: string,
     *   transactionType?: ?value-of<BeginTransactionRequestTransactionType>,
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   ttl?: ?int,
     *   eventTime?: ?DateTime,
     *   autoComplete?: ?bool,
     *   balanceExpiryInMinutes?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->transactionType = $values['transactionType'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->ttl = $values['ttl'] ?? null;
        $this->eventTime = $values['eventTime'] ?? null;
        $this->autoComplete = $values['autoComplete'] ?? null;
        $this->balanceExpiryInMinutes = $values['balanceExpiryInMinutes'] ?? null;
    }
}
