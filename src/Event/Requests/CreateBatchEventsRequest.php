<?php

namespace Brevo\Event\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Event\Types\CreateBatchEventsRequestEventsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateBatchEventsRequest extends JsonSerializableType
{
    /**
     * @var array<CreateBatchEventsRequestEventsItem> $events
     */
    #[JsonProperty('events'), ArrayType([CreateBatchEventsRequestEventsItem::class])]
    public array $events;

    /**
     * @param array{
     *   events: array<CreateBatchEventsRequestEventsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->events = $values['events'];
    }
}
