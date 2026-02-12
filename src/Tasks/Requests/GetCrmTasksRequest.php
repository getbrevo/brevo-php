<?php

namespace Brevo\Tasks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tasks\Types\GetCrmTasksRequestFilterStatus;
use Brevo\Tasks\Types\GetCrmTasksRequestFilterDate;
use Brevo\Tasks\Types\GetCrmTasksRequestSort;

class GetCrmTasksRequest extends JsonSerializableType
{
    /**
     * @var ?string $filterType Filter by task type (ID)
     */
    public ?string $filterType;

    /**
     * @var ?value-of<GetCrmTasksRequestFilterStatus> $filterStatus Filter by task status
     */
    public ?string $filterStatus;

    /**
     * @var ?value-of<GetCrmTasksRequestFilterDate> $filterDate Filter by date
     */
    public ?string $filterDate;

    /**
     * @var ?string $filterAssignTo Filter by the "assignTo" ID. You can utilize account emails for the "assignTo" attribute.
     */
    public ?string $filterAssignTo;

    /**
     * @var ?string $filterContacts Filter by contact ids
     */
    public ?string $filterContacts;

    /**
     * @var ?string $filterDeals Filter by deals ids
     */
    public ?string $filterDeals;

    /**
     * @var ?string $filterCompanies Filter by companies ids
     */
    public ?string $filterCompanies;

    /**
     * @var ?int $dateFrom dateFrom to date range filter type (timestamp in milliseconds)
     */
    public ?int $dateFrom;

    /**
     * @var ?int $dateTo dateTo to date range filter type (timestamp in milliseconds)
     */
    public ?int $dateTo;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?value-of<GetCrmTasksRequestSort> $sort Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?string $sortBy The field used to sort field names.
     */
    public ?string $sortBy;

    /**
     * @param array{
     *   filterType?: ?string,
     *   filterStatus?: ?value-of<GetCrmTasksRequestFilterStatus>,
     *   filterDate?: ?value-of<GetCrmTasksRequestFilterDate>,
     *   filterAssignTo?: ?string,
     *   filterContacts?: ?string,
     *   filterDeals?: ?string,
     *   filterCompanies?: ?string,
     *   dateFrom?: ?int,
     *   dateTo?: ?int,
     *   offset?: ?int,
     *   limit?: ?int,
     *   sort?: ?value-of<GetCrmTasksRequestSort>,
     *   sortBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filterType = $values['filterType'] ?? null;
        $this->filterStatus = $values['filterStatus'] ?? null;
        $this->filterDate = $values['filterDate'] ?? null;
        $this->filterAssignTo = $values['filterAssignTo'] ?? null;
        $this->filterContacts = $values['filterContacts'] ?? null;
        $this->filterDeals = $values['filterDeals'] ?? null;
        $this->filterCompanies = $values['filterCompanies'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortBy = $values['sortBy'] ?? null;
    }
}
