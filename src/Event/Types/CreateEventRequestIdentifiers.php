<?php

namespace Brevo\Event\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Identifies the contact associated with the event. At least one identifier is required.
 */
class CreateEventRequestIdentifiers extends JsonSerializableType
{
    /**
     * @var ?int $contactId Internal unique contact ID. When present, this takes priority over all other identifiers for event attribution and contact resolution.
     */
    #[JsonProperty('contact_id')]
    public ?int $contactId;

    /**
     * @var ?string $emailId Email Id associated with the event
     */
    #[JsonProperty('email_id')]
    public ?string $emailId;

    /**
     * @var ?string $extId ext_id associated with the event
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?string $landlineNumberId landline_number associated with the event
     */
    #[JsonProperty('landline_number_id')]
    public ?string $landlineNumberId;

    /**
     * @var ?string $phoneId SMS associated with the event
     */
    #[JsonProperty('phone_id')]
    public ?string $phoneId;

    /**
     * @var ?string $whatsappId whatsapp associated with the event
     */
    #[JsonProperty('whatsapp_id')]
    public ?string $whatsappId;

    /**
     * @param array{
     *   contactId?: ?int,
     *   emailId?: ?string,
     *   extId?: ?string,
     *   landlineNumberId?: ?string,
     *   phoneId?: ?string,
     *   whatsappId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->emailId = $values['emailId'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->landlineNumberId = $values['landlineNumberId'] ?? null;
        $this->phoneId = $values['phoneId'] ?? null;
        $this->whatsappId = $values['whatsappId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
