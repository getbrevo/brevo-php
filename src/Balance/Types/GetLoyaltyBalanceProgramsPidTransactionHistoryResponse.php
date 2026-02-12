<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Response containing transaction history details for a specific balance and contact.
 */
class GetLoyaltyBalanceProgramsPidTransactionHistoryResponse extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId Unique identifier of the associated balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?int $contactId Unique identifier of the contact related to the transactions.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?int $count Total number of transactions in the history.
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the associated loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<GetLoyaltyBalanceProgramsPidTransactionHistoryResponseTransactionHistoryItem> $transactionHistory List of past transactions associated with the balance.
     */
    #[JsonProperty('transactionHistory'), ArrayType([GetLoyaltyBalanceProgramsPidTransactionHistoryResponseTransactionHistoryItem::class])]
    public ?array $transactionHistory;

    /**
     * @param array{
     *   balanceDefinitionId?: ?string,
     *   contactId?: ?int,
     *   count?: ?int,
     *   loyaltyProgramId?: ?string,
     *   transactionHistory?: ?array<GetLoyaltyBalanceProgramsPidTransactionHistoryResponseTransactionHistoryItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->count = $values['count'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->transactionHistory = $values['transactionHistory'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
