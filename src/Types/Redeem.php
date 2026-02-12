<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class Redeem extends JsonSerializableType
{
    /**
     * @var ?DateTime $cancelledAt Timestamp when the redemption was cancelled
     */
    #[JsonProperty('cancelledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $cancelledAt;

    /**
     * @var ?DateTime $completedAt Timestamp when the redemption was completed
     */
    #[JsonProperty('completedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $completedAt;

    /**
     * @var ?int $contactId Unique identifier for the contact
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?DateTime $createdAt Timestamp when the redemption was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $debitTransactionId Unique identifier for the debit transaction
     */
    #[JsonProperty('debitTransactionId')]
    public ?string $debitTransactionId;

    /**
     * @var ?DateTime $expiresAt Timestamp when the redemption expires
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var ?string $id Unique identifier for the redemption
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Unique identifier for the loyalty program
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Additional metadata associated with the redemption
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $rejectReason Reason for rejection if the redemption was rejected
     */
    #[JsonProperty('rejectReason')]
    public ?string $rejectReason;

    /**
     * @var ?DateTime $rejectedAt Timestamp when the redemption was rejected
     */
    #[JsonProperty('rejectedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $rejectedAt;

    /**
     * @var ?string $rewardAttributionId Unique identifier for the reward attribution
     */
    #[JsonProperty('rewardAttributionId')]
    public ?string $rewardAttributionId;

    /**
     * @var ?string $status Current status of the redemption
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?DateTime $updatedAt Timestamp when the redemption was last updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   cancelledAt?: ?DateTime,
     *   completedAt?: ?DateTime,
     *   contactId?: ?int,
     *   createdAt?: ?DateTime,
     *   debitTransactionId?: ?string,
     *   expiresAt?: ?DateTime,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   rejectReason?: ?string,
     *   rejectedAt?: ?DateTime,
     *   rewardAttributionId?: ?string,
     *   status?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cancelledAt = $values['cancelledAt'] ?? null;
        $this->completedAt = $values['completedAt'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->debitTransactionId = $values['debitTransactionId'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rejectReason = $values['rejectReason'] ?? null;
        $this->rejectedAt = $values['rejectedAt'] ?? null;
        $this->rewardAttributionId = $values['rewardAttributionId'] ?? null;
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
