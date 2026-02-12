<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\GetContactsFromListRequestSort;

class GetContactsFromListRequest extends JsonSerializableType
{
    /**
     * @var ?string $modifiedSince Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetContactsFromListRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   modifiedSince?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetContactsFromListRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
