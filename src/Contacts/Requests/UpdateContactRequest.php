<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\UpdateContactRequestIdentifierType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class UpdateContactRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateContactRequestIdentifierType> $identifierType email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute
     */
    public ?string $identifierType;

    /**
     * @var ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )> $attributes Pass the set of attributes to be updated. **These attributes must be present in your account**. To update existing email address of a contact with the new one please pass EMAIL in attributes. For example, **{ "EMAIL":"newemail@domain.com", "FNAME":"Ellie", "LNAME":"Roger", "COUNTRIES":["India","China"]}**. The attribute's parameter should be passed in capital letter while updating a contact. Values that don't match the attribute type (e.g. text or string in a date attribute) will be ignored .Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in **SMS** field should be passed with proper country code. For example: **{"SMS":"+91xxxxxxxxxx"} or {"SMS":"0091xxxxxxxxxx"}**
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('float', 'string', 'bool', ['string'])])]
    public ?array $attributes;

    /**
     * @var ?bool $emailBlacklisted Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted = true)
     */
    #[JsonProperty('emailBlacklisted')]
    public ?bool $emailBlacklisted;

    /**
     * @var ?string $extId Pass your own Id to update ext_id of a contact.
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?array<int> $listIds Ids of the lists to add the contact to
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?bool $smsBlacklisted Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted = true)
     */
    #[JsonProperty('smsBlacklisted')]
    public ?bool $smsBlacklisted;

    /**
     * @var ?array<string> $smtpBlacklistSender transactional email forbidden sender for contact. Use only for email Contact
     */
    #[JsonProperty('smtpBlacklistSender'), ArrayType(['string'])]
    public ?array $smtpBlacklistSender;

    /**
     * @var ?array<int> $unlinkListIds Ids of the lists to remove the contact from
     */
    #[JsonProperty('unlinkListIds'), ArrayType(['integer'])]
    public ?array $unlinkListIds;

    /**
     * @param array{
     *   identifierType?: ?value-of<UpdateContactRequestIdentifierType>,
     *   attributes?: ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )>,
     *   emailBlacklisted?: ?bool,
     *   extId?: ?string,
     *   listIds?: ?array<int>,
     *   smsBlacklisted?: ?bool,
     *   smtpBlacklistSender?: ?array<string>,
     *   unlinkListIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifierType = $values['identifierType'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->emailBlacklisted = $values['emailBlacklisted'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->smsBlacklisted = $values['smsBlacklisted'] ?? null;
        $this->smtpBlacklistSender = $values['smtpBlacklistSender'] ?? null;
        $this->unlinkListIds = $values['unlinkListIds'] ?? null;
    }
}
