<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\GetTransacEmailsListRequestSort;

class GetTransacEmailsListRequest extends JsonSerializableType
{
    /**
     * @var ?string $email **Mandatory if templateId and messageId are not passed in query filters.** Email address to which transactional email has been sent.
     */
    public ?string $email;

    /**
     * @var ?int $templateId **Mandatory if email and messageId are not passed in query filters.** Id of the template that was used to compose transactional email.
     */
    public ?int $templateId;

    /**
     * @var ?string $messageId **Mandatory if templateId and email are not passed in query filters.** Message ID of the transactional email sent.
     */
    public ?string $messageId;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the list. **Maximum time period that can be selected is one month**.
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the list. **Maximum time period that can be selected is one month.**
     */
    public ?string $endDate;

    /**
     * @var ?value-of<GetTransacEmailsListRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 500;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @param array{
     *   email?: ?string,
     *   templateId?: ?int,
     *   messageId?: ?string,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   sort?: ?value-of<GetTransacEmailsListRequestSort>,
     *   limit?: ?int,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->messageId = $values['messageId'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }
}
