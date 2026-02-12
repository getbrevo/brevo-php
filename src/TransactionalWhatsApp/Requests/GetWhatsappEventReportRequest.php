<?php

namespace Brevo\TransactionalWhatsApp\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalWhatsApp\Types\GetWhatsappEventReportRequestEvent;
use Brevo\TransactionalWhatsApp\Types\GetWhatsappEventReportRequestSort;

class GetWhatsappEventReportRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number limitation for the result returned
     */
    public ?int $limit = 2500;

    /**
     * @var ?int $offset Beginning point in the list to retrieve from
     */
    public ?int $offset = 0;

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
     * @var ?string $contactNumber Filter results for specific contact (WhatsApp Number with country code. Example, 85264318721)
     */
    public ?string $contactNumber;

    /**
     * @var ?value-of<GetWhatsappEventReportRequestEvent> $event Filter the report for a specific event type
     */
    public ?string $event;

    /**
     * @var ?value-of<GetWhatsappEventReportRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   days?: ?int,
     *   contactNumber?: ?string,
     *   event?: ?value-of<GetWhatsappEventReportRequestEvent>,
     *   sort?: ?value-of<GetWhatsappEventReportRequestSort>,
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
        $this->contactNumber = $values['contactNumber'] ?? null;
        $this->event = $values['event'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
