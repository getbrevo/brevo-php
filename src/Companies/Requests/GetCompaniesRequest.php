<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Companies\Types\GetCompaniesRequestSort;

class GetCompaniesRequest extends JsonSerializableType
{
    /**
     * @var ?string $filtersAttributesName Filter by attributes. If you have a filter for the owner on your side please send it as filters[attributes.owner] and utilize the account email for the filtering.
     */
    public ?string $filtersAttributesName;

    /**
     * @var ?int $linkedContactsIds Filter by linked contacts ids
     */
    public ?int $linkedContactsIds;

    /**
     * @var ?string $linkedDealsIds Filter by linked Deals ids
     */
    public ?string $linkedDealsIds;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the companies modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the companies created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $createdSince;

    /**
     * @var ?int $page Index of the first document of the page
     */
    public ?int $page;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit;

    /**
     * @var ?value-of<GetCompaniesRequestSort> $sort Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?string $sortBy The field used to sort field names.
     */
    public ?string $sortBy;

    /**
     * @param array{
     *   filtersAttributesName?: ?string,
     *   linkedContactsIds?: ?int,
     *   linkedDealsIds?: ?string,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   page?: ?int,
     *   limit?: ?int,
     *   sort?: ?value-of<GetCompaniesRequestSort>,
     *   sortBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filtersAttributesName = $values['filtersAttributesName'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->linkedDealsIds = $values['linkedDealsIds'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortBy = $values['sortBy'] ?? null;
    }
}
