<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Represents a transaction involving a balance, including status and timestamps.
 */
class Transaction extends JsonSerializableType
{
    /**
     * @var ?float $amount The transaction amount.
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?string $balanceDefinitionId Unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?string $cancelledAt Timestamp when the transaction was canceled (nullable).
     */
    #[JsonProperty('cancelledAt')]
    public ?string $cancelledAt;

    /**
     * @var ?string $completedAt Timestamp when the transaction was completed (nullable).
     */
    #[JsonProperty('completedAt')]
    public ?string $completedAt;

    /**
     * @var ?int $contactId Unique identifier of the contact associated with the transaction.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $createdAt Timestamp when the transaction was created.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $eventTime Optional timestamp indicating when the transaction event occurred.
     */
    #[JsonProperty('eventTime')]
    public ?string $eventTime;

    /**
     * @var ?string $expirationDate Expiry date of the transaction (nullable).
     */
    #[JsonProperty('expirationDate')]
    public ?string $expirationDate;

    /**
     * @var ?string $id Unique identifier (UUID) of the transaction.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Unique identifier (UUID) of the associated loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the transaction.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $rejectReason Reason for rejection if the transaction was declined (nullable).
     */
    #[JsonProperty('rejectReason')]
    public ?string $rejectReason;

    /**
     * @var ?string $rejectedAt Timestamp when the transaction was rejected (nullable).
     */
    #[JsonProperty('rejectedAt')]
    public ?string $rejectedAt;

    /**
     * @var ?string $status The current status of the transaction (e.g., pending, completed, rejected).
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $updatedAt Timestamp when the transaction was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   amount?: ?float,
     *   balanceDefinitionId?: ?string,
     *   cancelledAt?: ?string,
     *   completedAt?: ?string,
     *   contactId?: ?int,
     *   createdAt?: ?string,
     *   eventTime?: ?string,
     *   expirationDate?: ?string,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   rejectReason?: ?string,
     *   rejectedAt?: ?string,
     *   status?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->amount = $values['amount'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->cancelledAt = $values['cancelledAt'] ?? null;
        $this->completedAt = $values['completedAt'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->eventTime = $values['eventTime'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rejectReason = $values['rejectReason'] ?? null;
        $this->rejectedAt = $values['rejectedAt'] ?? null;
        $this->status = $values['status'] ?? null;
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
