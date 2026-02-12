<?php

namespace Brevo\TransactionalWhatsApp\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SendWhatsappMessageRequestParams extends JsonSerializableType
{
    /**
     * @var array<string> $contactNumbers List of phone numbers of the contacts
     */
    #[JsonProperty('contactNumbers'), ArrayType(['string'])]
    public array $contactNumbers;

    /**
     * @var ?array<string, mixed> $params Pass the set of attributes to customize the template. For example, {"FNAME":"Joe", "LNAME":"Doe"}.
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var string $senderNumber WhatsApp Number with country code. Example, 85264318721
     */
    #[JsonProperty('senderNumber')]
    public string $senderNumber;

    /**
     * @var int $templateId ID of the template to send
     */
    #[JsonProperty('templateId')]
    public int $templateId;

    /**
     * @param array{
     *   contactNumbers: array<string>,
     *   senderNumber: string,
     *   templateId: int,
     *   params?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactNumbers = $values['contactNumbers'];
        $this->params = $values['params'] ?? null;
        $this->senderNumber = $values['senderNumber'];
        $this->templateId = $values['templateId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
