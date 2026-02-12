<?php

namespace Brevo\InboundParsing\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\InboundParsing\Types\GetInboundEmailEventsRequestSort;

class GetInboundEmailEventsRequest extends JsonSerializableType
{
    /**
     * @var ?string $sender Email address of the sender.
     */
    public ?string $sender;

    /**
     * @var ?string $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) from which you want to fetch the list. Maximum time period that can be selected is one month.
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) till which you want to fetch the list. Maximum time period that can be selected is one month.
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Number of documents returned per page
     */
    public ?int $limit = 100;

    /**
     * @var ?int $offset Index of the first document on the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetInboundEmailEventsRequestSort> $sort Sort the results in the ascending/descending order of record creation
     */
    public ?string $sort;

    /**
     * @param array{
     *   sender?: ?string,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetInboundEmailEventsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sender = $values['sender'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
