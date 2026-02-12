<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdRequestSort;
use Brevo\TransactionalEmails\Types\GetScheduledEmailByIdRequestStatus;

class GetScheduledEmailByIdRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $startDate Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older tha current date.
     */
    public ?DateTime $startDate;

    /**
     * @var ?DateTime $endDate Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
     */
    public ?DateTime $endDate;

    /**
     * @var ?value-of<GetScheduledEmailByIdRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed. Not valid when identifier is `messageId`.
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetScheduledEmailByIdRequestStatus> $status Filter the records by `status` of the scheduled email batch or message. Not valid when identifier is `messageId`.
     */
    public ?string $status;

    /**
     * @var ?int $limit Number of documents returned per page. Not valid when identifier is `messageId`.
     */
    public ?int $limit = 100;

    /**
     * @var ?int $offset Index of the first document on the page.  Not valid when identifier is `messageId`.
     */
    public ?int $offset = 0;

    /**
     * @param array{
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   sort?: ?value-of<GetScheduledEmailByIdRequestSort>,
     *   status?: ?value-of<GetScheduledEmailByIdRequestStatus>,
     *   limit?: ?int,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }
}
