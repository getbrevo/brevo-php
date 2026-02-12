<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Represents an order linked to a balance definition, including amount, due date, and transaction details.
 */
class CreateBalanceOrderResponse extends JsonSerializableType
{
    /**
     * @var float $amount Order amount (must not be zero).
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var ?string $balanceDefinitionId Optional unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var int $contactId Unique identifier of the contact placing the order (must be ≥ 1).
     */
    #[JsonProperty('contactId')]
    public int $contactId;

    /**
     * @var string $createdAt RFC3339 timestamp indicating when the order was created.
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $dueAt RFC3339 timestamp specifying when the order is due in the future.
     */
    #[JsonProperty('dueAt')]
    public string $dueAt;

    /**
     * @var ?string $expiresAt Optional RFC3339 timestamp defining order expiration in the future.
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @var ?string $id Unique identifier for the balance order.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var string $loyaltyProgramId Unique identifier of the loyalty program associated with the order.
     */
    #[JsonProperty('loyaltyProgramId')]
    public string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the order.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $processedAt Optional RFC3339 timestamp indicating when the order was processed.
     */
    #[JsonProperty('processedAt')]
    public ?string $processedAt;

    /**
     * @var ?string $transactionid Optional reference to the associated transaction ID.
     */
    #[JsonProperty('transactionid')]
    public ?string $transactionid;

    /**
     * @var string $updatedAt RFC3339 timestamp indicating the last update to the order.
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   amount: float,
     *   contactId: int,
     *   createdAt: string,
     *   dueAt: string,
     *   loyaltyProgramId: string,
     *   updatedAt: string,
     *   balanceDefinitionId?: ?string,
     *   expiresAt?: ?string,
     *   id?: ?string,
     *   meta?: ?array<string, mixed>,
     *   processedAt?: ?string,
     *   transactionid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->contactId = $values['contactId'];
        $this->createdAt = $values['createdAt'];
        $this->dueAt = $values['dueAt'];
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'];
        $this->meta = $values['meta'] ?? null;
        $this->processedAt = $values['processedAt'] ?? null;
        $this->transactionid = $values['transactionid'] ?? null;
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
