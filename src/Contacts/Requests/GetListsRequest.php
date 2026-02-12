<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\GetListsRequestSort;

class GetListsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 10;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetListsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetListsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
