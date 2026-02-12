<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\GetTransacBlockedContactsRequestSort;

class GetTransacBlockedContactsRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the blocked or unsubscribed contacts
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the blocked or unsubscribed contacts
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document on the page
     */
    public ?int $offset = 0;

    /**
     * @var ?array<string> $senders Comma separated list of emails of the senders from which contacts are blocked or unsubscribed
     */
    public ?array $senders;

    /**
     * @var ?value-of<GetTransacBlockedContactsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   senders?: ?array<string>,
     *   sort?: ?value-of<GetTransacBlockedContactsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->senders = $values['senders'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
