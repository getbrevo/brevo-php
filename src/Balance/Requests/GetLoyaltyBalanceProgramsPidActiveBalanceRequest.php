<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidActiveBalanceRequestSort;

class GetLoyaltyBalanceProgramsPidActiveBalanceRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Limit
     */
    public ?int $limit;

    /**
     * @var ?int $offset Offset
     */
    public ?int $offset;

    /**
     * @var ?'createdAt' $sortField Sort Field
     */
    public ?string $sortField;

    /**
     * @var ?value-of<GetLoyaltyBalanceProgramsPidActiveBalanceRequestSort> $sort Sort Order
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
     * @var ?bool $includeInternal Include balances tied to internal definitions.
     */
    public ?bool $includeInternal;

    /**
     * @param array{
     *   contactId: int,
     *   balanceDefinitionId: string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?'createdAt',
     *   sort?: ?value-of<GetLoyaltyBalanceProgramsPidActiveBalanceRequestSort>,
     *   includeInternal?: ?bool,
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
        $this->includeInternal = $values['includeInternal'] ?? null;
    }
}
