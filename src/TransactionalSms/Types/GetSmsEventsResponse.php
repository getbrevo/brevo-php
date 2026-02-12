<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSmsEventsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetSmsEventsResponseEventsItem> $events
     */
    #[JsonProperty('events'), ArrayType([GetSmsEventsResponseEventsItem::class])]
    public ?array $events;

    /**
     * @param array{
     *   events?: ?array<GetSmsEventsResponseEventsItem>,
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
