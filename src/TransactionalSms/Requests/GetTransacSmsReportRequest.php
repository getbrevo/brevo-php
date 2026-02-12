<?php

namespace Brevo\TransactionalSms\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalSms\Types\GetTransacSmsReportRequestSort;

class GetTransacSmsReportRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
     */
    public ?string $endDate;

    /**
     * @var ?int $days Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
     */
    public ?int $days;

    /**
     * @var ?string $tag Filter on a tag
     */
    public ?string $tag;

    /**
     * @var ?value-of<GetTransacSmsReportRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   days?: ?int,
     *   tag?: ?string,
     *   sort?: ?value-of<GetTransacSmsReportRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->days = $values['days'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
