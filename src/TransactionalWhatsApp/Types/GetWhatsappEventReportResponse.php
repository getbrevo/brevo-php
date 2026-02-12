<?php

namespace Brevo\TransactionalWhatsApp\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWhatsappEventReportResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetWhatsappEventReportResponseEventsItem> $events
     */
    #[JsonProperty('events'), ArrayType([GetWhatsappEventReportResponseEventsItem::class])]
    public ?array $events;

    /**
     * @param array{
     *   events?: ?array<GetWhatsappEventReportResponseEventsItem>,
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
