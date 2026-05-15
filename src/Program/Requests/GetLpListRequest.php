<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Program\Types\GetLpListRequestSortField;
use Brevo\Program\Types\GetLpListRequestSort;

class GetLpListRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset;

    /**
     * @var ?value-of<GetLpListRequestSortField> $sortField Sort documents by field
     */
    public ?string $sortField;

    /**
     * @var ?value-of<GetLpListRequestSort> $sort Sort order
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sortField?: ?value-of<GetLpListRequestSortField>,
     *   sort?: ?value-of<GetLpListRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
