<?php

namespace Brevo\InboundParsing\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetInboundEmailEventsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetInboundEmailEventsResponseEventsItem> $events
     */
    #[JsonProperty('events'), ArrayType([GetInboundEmailEventsResponseEventsItem::class])]
    public ?array $events;

    /**
     * @param array{
     *   events?: ?array<GetInboundEmailEventsResponseEventsItem>,
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
