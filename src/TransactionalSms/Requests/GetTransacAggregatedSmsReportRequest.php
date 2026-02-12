<?php

namespace Brevo\TransactionalSms\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetTransacAggregatedSmsReportRequest extends JsonSerializableType
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
     * @var ?int $days Number of days in the past including today (positive integer). **Not compatible with startDate and endDate**
     */
    public ?int $days;

    /**
     * @var ?string $tag Filter on a tag
     */
    public ?string $tag;

    /**
     * @param array{
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   days?: ?int,
     *   tag?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->days = $values['days'] ?? null;
        $this->tag = $values['tag'] ?? null;
    }
}
