<?php

namespace Brevo\Coupons\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Coupons\Types\GetCouponCollectionsRequestSort;
use Brevo\Coupons\Types\GetCouponCollectionsRequestSortBy;

class GetCouponCollectionsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document on the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetCouponCollectionsRequestSort> $sort Sort the results by creation time in ascending/descending order
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetCouponCollectionsRequestSortBy> $sortBy The field used to sort coupon collections
     */
    public ?string $sortBy;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetCouponCollectionsRequestSort>,
     *   sortBy?: ?value-of<GetCouponCollectionsRequestSortBy>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortBy = $values['sortBy'] ?? null;
    }
}
