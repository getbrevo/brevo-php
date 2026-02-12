<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\GetSmtpTemplatesRequestSort;

class GetSmtpTemplatesRequest extends JsonSerializableType
{
    /**
     * @var ?bool $templateStatus Filter on the status of the template. Active = true, inactive = false
     */
    public ?bool $templateStatus;

    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetSmtpTemplatesRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   templateStatus?: ?bool,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetSmtpTemplatesRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->templateStatus = $values['templateStatus'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
