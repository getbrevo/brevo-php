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
    public ?int $limit = 20;

    /**
     * @var ?int $offset Page number to retrieve
     */
    public ?int $offset = 0;

    /**
     * @var ?'createdAt' $sortField Field to sort by
     */
    public ?string $sortField;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort> $sort Sort order, either asc or desc
     */
    public ?string $sort;

    /**
     * @var int $contactId Contact ID
     */
    public int $contactId = 0;

    /**
     * @var string $balanceDefinitionId Balance Definition ID
     */
    public string $balanceDefinitionId;

    /**
     * @var ?array<string> $filters Filters to apply
     */
    public ?array $filters;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus> $status Transaction status filter. Allowed values: draft, completed, rejected, cancelled, expired
     */
    public ?string $status;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType> $transactionType Transaction type filter. Allowed values: credit, debit
     */
    public ?string $transactionType;

    /**
     * @param array{
     *   contactId?: int,
     *   balanceDefinitionId: string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?'createdAt',
     *   sort?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort>,
     *   filters?: ?array<string>,
     *   status?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus>,
     *   transactionType?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->contactId = $values['contactId'] ?? 0;
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
        $this->filters = $values['filters'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->transactionType = $values['transactionType'] ?? null;
    }
}
