<?php

namespace Brevo\InboundParsing\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetInboundEmailEventsResponseEventsItem extends JsonSerializableType
{
    /**
     * @var DateTime $date Date when email was received on SMTP relay
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATETIME)]
    public DateTime $date;

    /**
     * @var string $recipient Recipient’s email address
     */
    #[JsonProperty('recipient')]
    public string $recipient;

    /**
     * @var string $sender Sender’s email address
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var string $uuid UUID that can be used to fetch additional data
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @param array{
     *   date: DateTime,
     *   recipient: string,
     *   sender: string,
     *   uuid: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->recipient = $values['recipient'];
        $this->sender = $values['sender'];
        $this->uuid = $values['uuid'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
