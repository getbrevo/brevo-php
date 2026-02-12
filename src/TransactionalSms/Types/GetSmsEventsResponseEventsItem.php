<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmsEventsResponseEventsItem extends JsonSerializableType
{
    /**
     * @var ?string $date UTC date-time on which the event has been generated
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?value-of<GetSmsEventsResponseEventsItemEvent> $event Event which occurred
     */
    #[JsonProperty('event')]
    public ?string $event;

    /**
     * @var ?string $messageId Message ID which generated the event
     */
    #[JsonProperty('messageId')]
    public ?string $messageId;

    /**
     * @var ?string $phoneNumber Phone number which has generated the event
     */
    #[JsonProperty('phoneNumber')]
    public ?string $phoneNumber;

    /**
     * @var ?string $reason Reason of bounce (only available if the event is hardbounce or softbounce)
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?string $reply
     */
    #[JsonProperty('reply')]
    public ?string $reply;

    /**
     * @var ?string $tag Tag of the SMS which generated the event
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @param array{
     *   date?: ?string,
     *   event?: ?value-of<GetSmsEventsResponseEventsItemEvent>,
     *   messageId?: ?string,
     *   phoneNumber?: ?string,
     *   reason?: ?string,
     *   reply?: ?string,
     *   tag?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->date = $values['date'] ?? null;
        $this->event = $values['event'] ?? null;
        $this->messageId = $values['messageId'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->reason = $values['reason'] ?? null;
        $this->reply = $values['reply'] ?? null;
        $this->tag = $values['tag'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
