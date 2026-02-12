<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\GetOrdersRequestSort;

class GetOrdersRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetOrdersRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $createdSince;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetOrdersRequestSort>,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
    }
}
