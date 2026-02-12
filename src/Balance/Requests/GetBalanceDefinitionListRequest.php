<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetBalanceDefinitionListRequestSortField;
use Brevo\Balance\Types\GetBalanceDefinitionListRequestSort;
use Brevo\Balance\Types\GetBalanceDefinitionListRequestVersion;

class GetBalanceDefinitionListRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Limit the number of records returned
     */
    public ?int $limit = 200;

    /**
     * @var ?int $offset Offset to paginate records
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetBalanceDefinitionListRequestSortField> $sortField Field to sort by
     */
    public ?string $sortField;

    /**
     * @var ?value-of<GetBalanceDefinitionListRequestSort> $sort Sort direction
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetBalanceDefinitionListRequestVersion> $version Version
     */
    public ?string $version;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?value-of<GetBalanceDefinitionListRequestSortField>,
     *   sort?: ?value-of<GetBalanceDefinitionListRequestSort>,
     *   version?: ?value-of<GetBalanceDefinitionListRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->version = $values['version'] ?? null;
    }
}
