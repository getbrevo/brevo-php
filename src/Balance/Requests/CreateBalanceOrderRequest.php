<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateBalanceOrderRequest extends JsonSerializableType
{
    /**
     * @var float $amount Order amount (must be non-zero).
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var string $balanceDefinitionId Unique identifier (UUID) of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public string $balanceDefinitionId;

    /**
     * @var int $contactId Unique identifier of the contact placing the order (must be ≥ 1).
     */
    #[JsonProperty('contactId')]
    public int $contactId;

    /**
     * @var string $dueAt RFC3339 timestamp specifying when the order is due.
     */
    #[JsonProperty('dueAt')]
    public string $dueAt;

    /**
     * @var ?string $expiresAt Optional RFC3339 timestamp defining order expiration.
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @var ?array<string, mixed> $meta Optional metadata associated with the order.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var string $source Specifies the origin of the order (`engine` or `user`).
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   amount: float,
     *   balanceDefinitionId: string,
     *   contactId: int,
     *   dueAt: string,
     *   source: string,
     *   expiresAt?: ?string,
     *   meta?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
        $this->contactId = $values['contactId'];
        $this->dueAt = $values['dueAt'];
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->source = $values['source'];
    }
}
