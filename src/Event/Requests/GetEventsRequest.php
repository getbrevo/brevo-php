<?php

namespace Brevo\Event\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetEventsRequest extends JsonSerializableType
{
    /**
     * @var ?array<int> $contactId Filter by contact ID (repeatable)
     */
    public ?array $contactId;

    /**
     * @var ?array<string> $eventName Filter by event name (repeatable)
     */
    public ?array $eventName;

    /**
     * @var ?array<string> $objectType Filter by object type (repeatable)
     */
    public ?array $objectType;

    /**
     * @var ?string $startDate Mandatory if endDate is used. Start of date range (YYYY-MM-DD or RFC3339). Defaults to 6 months ago when omitted alongside endDate. Must be ≤ endDate.
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate Mandatory if startDate is used. End of date range (YYYY-MM-DD or RFC3339). Must be ≥ startDate.
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Max events to return. Default 100, min 1, max 10000.
     */
    public ?int $limit = 100;

    /**
     * @var ?int $offset Events to skip for pagination. Default 0, min 0.
     */
    public ?int $offset = 0;

    /**
     * @param array{
     *   contactId?: ?array<int>,
     *   eventName?: ?array<string>,
     *   objectType?: ?array<string>,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->eventName = $values['eventName'] ?? null;
        $this->objectType = $values['objectType'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }
}
