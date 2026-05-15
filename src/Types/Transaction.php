<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * Represents a transaction involving a balance, including status and timestamps.
 */
class Transaction extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier (UUID) of the transaction.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?float $amount The transaction amount.
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?value-of<TransactionTransactionType> $transactionType The type of the transaction.
     */
    #[JsonProperty('transactionType')]
    public ?string $transactionType;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the transaction.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?value-of<TransactionStatus> $status The current status of the transaction.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $loyaltyProgramId Unique identifier (UUID) of the associated loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $balanceDefinitionId Unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?int $contactId Unique identifier of the contact associated with the transaction.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?DateTime $eventTime Optional timestamp indicating when the transaction event occurred (ISO 8601 format).
     */
    #[JsonProperty('eventTime'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $eventTime;

    /**
     * @var ?string $rejectReason Reason for rejection if the transaction was declined (nullable).
     */
    #[JsonProperty('rejectReason')]
    public ?string $rejectReason;

    /**
     * @var ?DateTime $rejectedAt Timestamp when the transaction was rejected (nullable).
     */
    #[JsonProperty('rejectedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $rejectedAt;

    /**
     * @var ?DateTime $expirationDate Expiry date of the transaction (nullable).
     */
    #[JsonProperty('expirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expirationDate;

    /**
     * @var ?DateTime $completedAt Timestamp when the transaction was completed (nullable).
     */
    #[JsonProperty('completedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $completedAt;

    /**
     * @var ?DateTime $cancelledAt Timestamp when the transaction was canceled (nullable).
     */
    #[JsonProperty('cancelledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $cancelledAt;

    /**
     * @var ?DateTime $createdAt Timestamp when the transaction was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp when the transaction was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   amount?: ?float,
     *   transactionType?: ?value-of<TransactionTransactionType>,
     *   meta?: ?array<string, mixed>,
     *   status?: ?value-of<TransactionStatus>,
     *   loyaltyProgramId?: ?string,
     *   balanceDefinitionId?: ?string,
     *   contactId?: ?int,
     *   eventTime?: ?DateTime,
     *   rejectReason?: ?string,
     *   rejectedAt?: ?DateTime,
     *   expirationDate?: ?DateTime,
     *   completedAt?: ?DateTime,
     *   cancelledAt?: ?DateTime,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->transactionType = $values['transactionType'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->eventTime = $values['eventTime'] ?? null;
        $this->rejectReason = $values['rejectReason'] ?? null;
        $this->rejectedAt = $values['rejectedAt'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->completedAt = $values['completedAt'] ?? null;
        $this->cancelledAt = $values['cancelledAt'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
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
