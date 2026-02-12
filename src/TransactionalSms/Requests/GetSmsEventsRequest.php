<?php

namespace Brevo\TransactionalSms\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalSms\Types\GetSmsEventsRequestEvent;
use Brevo\TransactionalSms\Types\GetSmsEventsRequestSort;

class GetSmsEventsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
     */
    public ?string $endDate;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset = 0;

    /**
     * @var ?int $days Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
     */
    public ?int $days;

    /**
     * @var ?string $phoneNumber Filter the report for a specific phone number
     */
    public ?string $phoneNumber;

    /**
     * @var ?value-of<GetSmsEventsRequestEvent> $event Filter the report for specific events
     */
    public ?string $event;

    /**
     * @var ?string $tags Filter the report for specific tags passed as a serialized urlencoded array
     */
    public ?string $tags;

    /**
     * @var ?value-of<GetSmsEventsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   offset?: ?int,
     *   days?: ?int,
     *   phoneNumber?: ?string,
     *   event?: ?value-of<GetSmsEventsRequestEvent>,
     *   tags?: ?string,
     *   sort?: ?value-of<GetSmsEventsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->days = $values['days'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->event = $values['event'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
