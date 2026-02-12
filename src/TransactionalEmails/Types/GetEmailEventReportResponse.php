<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetEmailEventReportResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetEmailEventReportResponseEventsItem> $events
     */
    #[JsonProperty('events'), ArrayType([GetEmailEventReportResponseEventsItem::class])]
    public ?array $events;

    /**
     * @param array{
     *   events?: ?array<GetEmailEventReportResponseEventsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->events = $values['events'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
