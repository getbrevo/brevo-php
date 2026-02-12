<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Represents a record of a past transaction, including status and key timestamps.
 */
class GetLoyaltyBalanceProgramsPidTransactionHistoryResponseTransactionHistoryItem extends JsonSerializableType
{
    /**
     * @var ?float $amount The transaction amount.
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?string $balanceExpirationDate Expiration date of the balance associated with this transaction.
     */
    #[JsonProperty('balanceExpirationDate')]
    public ?string $balanceExpirationDate;

    /**
     * @var ?string $cancelledAt Timestamp when the transaction was canceled, if applicable.
     */
    #[JsonProperty('cancelledAt')]
    public ?string $cancelledAt;

    /**
     * @var ?string $completedAt Timestamp when the transaction was successfully completed.
     */
    #[JsonProperty('completedAt')]
    public ?string $completedAt;

    /**
     * @var ?string $createdAt Timestamp when the transaction was initiated.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $id Unique identifier of the transaction.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the transaction.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $rejectReason Reason for rejection, if the transaction was declined.
     */
    #[JsonProperty('rejectReason')]
    public ?string $rejectReason;

    /**
     * @var ?string $rejectedAt Timestamp when the transaction was rejected.
     */
    #[JsonProperty('rejectedAt')]
    public ?string $rejectedAt;

    /**
     * @var ?string $status Current status of the transaction (e.g., pending, completed, rejected).
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   amount?: ?float,
     *   balanceExpirationDate?: ?string,
     *   cancelledAt?: ?string,
     *   completedAt?: ?string,
     *   createdAt?: ?string,
     *   id?: ?string,
     *   meta?: ?array<string, mixed>,
     *   rejectReason?: ?string,
     *   rejectedAt?: ?string,
     *   status?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->amount = $values['amount'] ?? null;
        $this->balanceExpirationDate = $values['balanceExpirationDate'] ?? null;
        $this->cancelledAt = $values['cancelledAt'] ?? null;
        $this->completedAt = $values['completedAt'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rejectReason = $values['rejectReason'] ?? null;
        $this->rejectedAt = $values['rejectedAt'] ?? null;
        $this->status = $values['status'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
