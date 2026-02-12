<?php

namespace Brevo\TransactionalWhatsApp\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetWhatsappEventReportResponseEventsItem extends JsonSerializableType
{
    /**
     * @var ?string $body Text of the reply (will be there only in case of `reply` event with text)
     */
    #[JsonProperty('body')]
    public ?string $body;

    /**
     * @var string $contactNumber WhatsApp Number with country code. Example, 85264318721
     */
    #[JsonProperty('contactNumber')]
    public string $contactNumber;

    /**
     * @var string $date UTC date-time on which the event has been generated
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var value-of<GetWhatsappEventReportResponseEventsItemEvent> $event Event which occurred
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * @var ?string $mediaUrl Url of the media reply (will be there only in case of `reply` event with media)
     */
    #[JsonProperty('mediaUrl')]
    public ?string $mediaUrl;

    /**
     * @var string $messageId Message ID which generated the event
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var ?string $reason Reason for the event (will be there in case of `error` and `soft-bounce` events)
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var string $senderNumber WhatsApp Number with country code. Example, 85264318721
     */
    #[JsonProperty('senderNumber')]
    public string $senderNumber;

    /**
     * @param array{
     *   contactNumber: string,
     *   date: string,
     *   event: value-of<GetWhatsappEventReportResponseEventsItemEvent>,
     *   messageId: string,
     *   senderNumber: string,
     *   body?: ?string,
     *   mediaUrl?: ?string,
     *   reason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'] ?? null;
        $this->contactNumber = $values['contactNumber'];
        $this->date = $values['date'];
        $this->event = $values['event'];
        $this->mediaUrl = $values['mediaUrl'] ?? null;
        $this->messageId = $values['messageId'];
        $this->reason = $values['reason'] ?? null;
        $this->senderNumber = $values['senderNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
