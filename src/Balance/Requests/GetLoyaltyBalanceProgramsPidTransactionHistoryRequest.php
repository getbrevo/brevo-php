<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSortField;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort;

class GetLoyaltyBalanceProgramsPidTransactionHistoryRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Limit the number of records returned
     */
    public ?int $limit = 20;

    /**
     * @var ?int $offset Skip a number of records
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSortField> $sortField Field to sort by
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
     * @param array{
     *   contactId?: int,
     *   balanceDefinitionId: string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSortField>,
     *   sort?: ?value-of<GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSort>,
     *   filters?: ?array<string>,
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
    }
}
