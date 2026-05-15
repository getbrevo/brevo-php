<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Import process details with URLs to CSV reports
 */
class GetProcessesResponseProcessesItemInfoImport extends JsonSerializableType
{
    /**
     * @var ?string $invalidEmails URL to CSV file containing invalid email addresses, or null if none
     */
    #[JsonProperty('invalid_emails')]
    public ?string $invalidEmails;

    /**
     * @var ?string $duplicateContactId URL to CSV file containing duplicate contact IDs, or null if none
     */
    #[JsonProperty('duplicate_contact_id')]
    public ?string $duplicateContactId;

    /**
     * @var ?string $duplicateExtId URL to CSV file containing duplicate external IDs, or null if none
     */
    #[JsonProperty('duplicate_ext_id')]
    public ?string $duplicateExtId;

    /**
     * @var ?string $duplicateEmailId URL to CSV file containing duplicate email IDs, or null if none
     */
    #[JsonProperty('duplicate_email_id')]
    public ?string $duplicateEmailId;

    /**
     * @var ?string $duplicatePhoneId URL to CSV file containing duplicate phone numbers, or null if none
     */
    #[JsonProperty('duplicate_phone_id')]
    public ?string $duplicatePhoneId;

    /**
     * @var ?string $duplicateWhatsappId URL to CSV file containing duplicate WhatsApp numbers, or null if none
     */
    #[JsonProperty('duplicate_whatsapp_id')]
    public ?string $duplicateWhatsappId;

    /**
     * @var ?string $duplicateLandlineNumberId URL to CSV file containing duplicate landline numbers, or null if none
     */
    #[JsonProperty('duplicate_landline_number_id')]
    public ?string $duplicateLandlineNumberId;

    /**
     * @param array{
     *   invalidEmails?: ?string,
     *   duplicateContactId?: ?string,
     *   duplicateExtId?: ?string,
     *   duplicateEmailId?: ?string,
     *   duplicatePhoneId?: ?string,
     *   duplicateWhatsappId?: ?string,
     *   duplicateLandlineNumberId?: ?string,
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
