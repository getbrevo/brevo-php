<?php

namespace Brevo\Deals\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Deals\Types\GetCrmDealsRequestSort;

class GetCrmDealsRequest extends JsonSerializableType
{
    /**
     * @var ?string $filtersAttributesDealName Filter by attributes. If you have a filter for the owner on your end, please send it as filters[attributes.deal_owner] and utilize the account email for the filtering.
     */
    public ?string $filtersAttributesDealName;

    /**
     * @var ?string $filtersLinkedCompaniesIds Filter by linked companies ids
     */
    public ?string $filtersLinkedCompaniesIds;

    /**
     * @var ?string $filtersLinkedContactsIds Filter by linked companies ids
     */
    public ?string $filtersLinkedContactsIds;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $createdSince;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit;

    /**
     * @var ?value-of<GetCrmDealsRequestSort> $sort Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   filtersAttributesDealName?: ?string,
     *   filtersLinkedCompaniesIds?: ?string,
     *   filtersLinkedContactsIds?: ?string,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   offset?: ?int,
     *   limit?: ?int,
     *   sort?: ?value-of<GetCrmDealsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filtersAttributesDealName = $values['filtersAttributesDealName'] ?? null;
        $this->filtersLinkedCompaniesIds = $values['filtersLinkedCompaniesIds'] ?? null;
        $this->filtersLinkedContactsIds = $values['filtersLinkedContactsIds'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
