<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Import process details
 */
class GetProcessesResponseProcessesItemInfoImport extends JsonSerializableType
{
    /**
     * @var ?int $invalidEmails Number of invalid email addresses
     */
    #[JsonProperty('invalid_emails')]
    public ?int $invalidEmails;

    /**
     * @var ?int $duplicateContactId Number of duplicate contact IDs
     */
    #[JsonProperty('duplicate_contact_id')]
    public ?int $duplicateContactId;

    /**
     * @var ?int $duplicateExtId Number of duplicate external IDs
     */
    #[JsonProperty('duplicate_ext_id')]
    public ?int $duplicateExtId;

    /**
     * @var ?int $duplicateEmailId Number of duplicate email IDs
     */
    #[JsonProperty('duplicate_email_id')]
    public ?int $duplicateEmailId;

    /**
     * @var ?int $duplicatePhoneId Number of duplicate phone numbers
     */
    #[JsonProperty('duplicate_phone_id')]
    public ?int $duplicatePhoneId;

    /**
     * @var ?int $duplicateWhatsappId Number of duplicate WhatsApp numbers
     */
    #[JsonProperty('duplicate_whatsapp_id')]
    public ?int $duplicateWhatsappId;

    /**
     * @var ?int $duplicateLandlineNumberId Number of duplicate landline numbers
     */
    #[JsonProperty('duplicate_landline_number_id')]
    public ?int $duplicateLandlineNumberId;

    /**
     * @param array{
     *   invalidEmails?: ?int,
     *   duplicateContactId?: ?int,
     *   duplicateExtId?: ?int,
     *   duplicateEmailId?: ?int,
     *   duplicatePhoneId?: ?int,
     *   duplicateWhatsappId?: ?int,
     *   duplicateLandlineNumberId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->invalidEmails = $values['invalidEmails'] ?? null;
        $this->duplicateContactId = $values['duplicateContactId'] ?? null;
        $this->duplicateExtId = $values['duplicateExtId'] ?? null;
        $this->duplicateEmailId = $values['duplicateEmailId'] ?? null;
        $this->duplicatePhoneId = $values['duplicatePhoneId'] ?? null;
        $this->duplicateWhatsappId = $values['duplicateWhatsappId'] ?? null;
        $this->duplicateLandlineNumberId = $values['duplicateLandlineNumberId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
