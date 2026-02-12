<?php

namespace Brevo\ExternalFeeds\Requests;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\ExternalFeeds\Types\GetAllExternalFeedsRequestSort;
use Brevo\ExternalFeeds\Types\GetAllExternalFeedsRequestAuthType;

class GetAllExternalFeedsRequest extends JsonSerializableType
{
    /**
     * @var ?string $search Can be used to filter records by search keyword on feed name
     */
    public ?string $search;

    /**
     * Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which
     * you want to fetch the list. Can be maximum 30 days older than current
     * date.
     *
     * @var ?DateTime $startDate
     */
    public ?DateTime $startDate;

    /**
     * Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which
     * you want to fetch the list. Maximum time period that can be selected is
     * one month.
     *
     * @var ?DateTime $endDate
     */
    public ?DateTime $endDate;

    /**
     * Sort the results in the ascending/descending order of record creation.
     * Default order is **descending** if `sort` is not passed.
     *
     * @var ?value-of<GetAllExternalFeedsRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetAllExternalFeedsRequestAuthType> $authType Filter the records by `authType` of the feed.
     */
    public ?string $authType;

    /**
     * @var ?int $limit Number of documents returned per page.
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document on the page.
     */
    public ?int $offset = 0;

    /**
     * @param array{
     *   search?: ?string,
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   sort?: ?value-of<GetAllExternalFeedsRequestSort>,
     *   authType?: ?value-of<GetAllExternalFeedsRequestAuthType>,
     *   limit?: ?int,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->search = $values['search'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->authType = $values['authType'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }
}
