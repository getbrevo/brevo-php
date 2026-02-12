<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\GetSmtpReportRequestSort;

class GetSmtpReportRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 10;

    /**
     * @var ?int $offset Index of the first document on the page
     */
    public ?int $offset = 0;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD)
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD)
     */
    public ?string $endDate;

    /**
     * @var ?int $days Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
     */
    public ?int $days;

    /**
     * @var ?string $tag Tag of the emails
     */
    public ?string $tag;

    /**
     * @var ?value-of<GetSmtpReportRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   days?: ?int,
     *   tag?: ?string,
     *   sort?: ?value-of<GetSmtpReportRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->days = $values['days'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
