<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetContactBalancesRequestSort;
use Brevo\Balance\Types\GetContactBalancesRequestSortField;

class GetContactBalancesRequest extends JsonSerializableType
{
    /**
     * @var ?bool $includeInternal Include balances tied to internal definitions.
     */
    public ?bool $includeInternal;

    /**
     * @var ?int $limit Limit the number of records returned
     */
    public ?int $limit;

    /**
     * @var ?int $offset Skip a number of records
     */
    public ?int $offset;

    /**
     * @var ?value-of<GetContactBalancesRequestSort> $sort Sort order
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetContactBalancesRequestSortField> $sortField Field to sort by
     */
    public ?string $sortField;

    /**
     * @var string $balanceDefinitionId Balance Definition ID (required)
     */
    public string $balanceDefinitionId;

    /**
     * @param array{
     *   balanceDefinitionId: string,
     *   includeInternal?: ?bool,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetContactBalancesRequestSort>,
     *   sortField?: ?value-of<GetContactBalancesRequestSortField>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->includeInternal = $values['includeInternal'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
    }
}
