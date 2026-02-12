<?php

namespace Brevo\CustomObjects\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\CustomObjects\Types\GetrecordsRequestSort;
use Brevo\CustomObjects\Types\GetrecordsRequestAssociation;

class GetrecordsRequest extends JsonSerializableType
{
    /**
     * @var int $limit Number of records returned per page
     */
    public int $limit;

    /**
     * @var int $pageNum Page number for pagination. It's used to fetch the object records on a provided page number. Must be a valid positive integer.
     */
    public int $pageNum;

    /**
     * @var ?value-of<GetrecordsRequestSort> $sort Sort order, must be 'asc' or 'desc'. Default to 'desc' if not provided.
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetrecordsRequestAssociation> $association Whether to include associations, must be 'true' or 'false'. Default to 'false' if not provided.
     */
    public ?string $association;

    /**
     * @param array{
     *   limit: int,
     *   pageNum: int,
     *   sort?: ?value-of<GetrecordsRequestSort>,
     *   association?: ?value-of<GetrecordsRequestAssociation>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->limit = $values['limit'];
        $this->pageNum = $values['pageNum'];
        $this->sort = $values['sort'] ?? null;
        $this->association = $values['association'] ?? null;
    }
}
