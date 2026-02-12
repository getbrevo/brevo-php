<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;

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
     * @var ?string $sortField Sort Field
     */
    public ?string $sortField;

    /**
     * @var ?string $sort Sort Order
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
     * @param array{
     *   contactId: int,
     *   balanceDefinitionId: string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?string,
     *   sort?: ?string,
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
    }
}
