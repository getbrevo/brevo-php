<?php

namespace Brevo\TransactionalWhatsApp\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendWhatsappMessageResponse extends JsonSerializableType
{
    /**
     * @var string $messageId messageId of sent message
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @param array{
     *   messageId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messageId = $values['messageId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
