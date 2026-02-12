<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\GetEmailEventReportRequestEvent;
use Brevo\TransactionalEmails\Types\GetEmailEventReportRequestSort;

class GetEmailEventReportRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number limitation for the result returned
     */
    public ?int $limit = 2500;

    /**
     * @var ?int $offset Beginning point in the list to retrieve from.
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
     * @var ?string $email Filter the report for a specific email addresses
     */
    public ?string $email;

    /**
     * @var ?value-of<GetEmailEventReportRequestEvent> $event Filter the report for a specific event type
     */
    public ?string $event;

    /**
     * @var ?string $tags Filter the report for tags (serialized and urlencoded array)
     */
    public ?string $tags;

    /**
     * @var ?string $messageId Filter on a specific message id
     */
    public ?string $messageId;

    /**
     * @var ?int $templateId Filter on a specific template id
     */
    public ?int $templateId;

    /**
     * @var ?value-of<GetEmailEventReportRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   days?: ?int,
     *   email?: ?string,
     *   event?: ?value-of<GetEmailEventReportRequestEvent>,
     *   tags?: ?string,
     *   messageId?: ?string,
     *   templateId?: ?int,
     *   sort?: ?value-of<GetEmailEventReportRequestSort>,
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
        $this->email = $values['email'] ?? null;
        $this->event = $values['event'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->messageId = $values['messageId'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
