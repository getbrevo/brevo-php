<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetAggregatedSmtpReportRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
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
