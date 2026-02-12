<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\GetContactsRequestSort;

class GetContactsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset = 0;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $createdSince;

    /**
     * @var ?value-of<GetContactsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?int $segmentId Id of the segment. **Either listIds or segmentId can be passed.**
     */
    public ?int $segmentId;

    /**
     * @var ?array<int> $listIds Ids of the list. **Either listIds or segmentId can be passed.**
     */
    public ?array $listIds;

    /**
     * @var ?string $filter Filter the contacts on the basis of attributes. **Allowed operator: equals. For multiple-choice options, the filter will apply an AND condition between the options. For category attributes, the filter will work with both id and value. (e.g. filter=equals(FIRSTNAME,"Antoine"), filter=equals(B1, true), filter=equals(DOB, "1989-11-23"), filter=equals(GENDER, "1"), filter=equals(GENDER, "MALE"), filter=equals(COUNTRY,"USA, INDIA")**
     */
    public ?string $filter;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   sort?: ?value-of<GetContactsRequestSort>,
     *   segmentId?: ?int,
     *   listIds?: ?array<int>,
     *   filter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->segmentId = $values['segmentId'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->filter = $values['filter'] ?? null;
    }
}
