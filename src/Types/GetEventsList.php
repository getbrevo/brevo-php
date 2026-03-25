<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Response containing a list of events and the total count for pagination
 */
class GetEventsList extends JsonSerializableType
{
    /**
     * @var ?array<GetEventsListEventsItem> $events List of matching events ordered by event_date descending
     */
    #[JsonProperty('events'), ArrayType([GetEventsListEventsItem::class])]
    public ?array $events;

    /**
     * @var int $count Total count of events matching the filters (use for pagination)
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   count: int,
     *   events?: ?array<GetEventsListEventsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->events = $values['events'] ?? null;
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
