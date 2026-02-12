<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Optional. Use this object if you want to let Brevo send an email to the contact, with the payment request URL. If empty, no notifications (message and reminders) will be sent.
 */
class Notification extends JsonSerializableType
{
    /**
     * @var 'email' $channel Channel used to send the notifications.
     */
    #[JsonProperty('channel')]
    public string $channel;

    /**
     * @var string $text Use this field if you want to give more context to your contact about the payment request.
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   channel: 'email',
     *   text: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->channel = $values['channel'];
        $this->text = $values['text'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
