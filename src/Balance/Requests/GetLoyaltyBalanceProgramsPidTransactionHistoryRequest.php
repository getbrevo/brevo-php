<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType;

class GetLoyaltyBalanceProgramsPidTransactionHistoryRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Limit the number of records returned
     */
    public ?int $limit;

    /**
     * @var ?int $offset Page number to retrieve
     */
    public ?int $offset;

    /**
     * @var ?'createdAt' $sortField Field to sort by
     */
    public ?string $sortField;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort> $sort Sort order
     */
    public ?string $sort;

    /**
     * @var int $contactId Contact ID
     */
    public int $contactId;

    /**
     * @var string $balanceDefinitionId Balance Definition ID
     */
    public string $balanceDefinitionId;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus> $status Transaction status filter
     */
    public ?string $status;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType> $transactionType Transaction type filter
     */
    public ?string $transactionType;

    /**
     * @var ?string $loyaltySubscriptionId Loyalty Subscription ID filter
     */
    public ?string $loyaltySubscriptionId;

    /**
     * @param array{
     *   contactId: int,
     *   balanceDefinitionId: string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?'createdAt',
     *   sort?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort>,
     *   status?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus>,
     *   transactionType?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType>,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->contactId = $values['contactId'];
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
        $this->status = $values['status'] ?? null;
        $this->transactionType = $values['transactionType'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
    }
}
