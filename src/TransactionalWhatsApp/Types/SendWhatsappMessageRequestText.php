<?php

namespace Brevo\TransactionalWhatsApp\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SendWhatsappMessageRequestText extends JsonSerializableType
{
    /**
     * @var array<string> $contactNumbers List of phone numbers of the contacts
     */
    #[JsonProperty('contactNumbers'), ArrayType(['string'])]
    public array $contactNumbers;

    /**
     * @var string $senderNumber WhatsApp Number with country code. Example, 85264318721
     */
    #[JsonProperty('senderNumber')]
    public string $senderNumber;

    /**
     * @var string $text Text to be sent as message body (will be overridden if templateId is passed in the same request)
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   contactNumbers: array<string>,
     *   senderNumber: string,
     *   text: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactNumbers = $values['contactNumbers'];
        $this->senderNumber = $values['senderNumber'];
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
