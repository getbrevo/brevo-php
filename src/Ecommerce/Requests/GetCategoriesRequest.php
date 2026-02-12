<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\GetCategoriesRequestSort;

class GetCategoriesRequest extends JsonSerializableType
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
     * @var ?value-of<GetCategoriesRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?array<string> $ids Filter by category ids
     */
    public ?array $ids;

    /**
     * @var ?string $name Filter by category name
     */
    public ?string $name;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the categories modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the categories created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $createdSince;

    /**
     * @var ?string $isDeleted Filter categories by their deletion status. If `false` is passed, only categories that are not deleted will be returned.
     */
    public ?string $isDeleted;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetCategoriesRequestSort>,
     *   ids?: ?array<string>,
     *   name?: ?string,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   isDeleted?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->ids = $values['ids'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->isDeleted = $values['isDeleted'] ?? null;
    }
}
