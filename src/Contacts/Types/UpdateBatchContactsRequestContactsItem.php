<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpdateBatchContactsRequestContactsItem extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Pass the set of attributes to be updated. **These attributes must be present in your account**. To update existing email address of a contact with the new one please pass EMAIL in attribtes. For example, **{ "EMAIL":"newemail@domain.com", "FNAME":"Ellie", "LNAME":"Roger"}**. Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in **SMS** field should be passed with proper country code. For example: **{"SMS":"+91xxxxxxxxxx"} or {"SMS":"0091xxxxxxxxxx"}**
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?string $email Email address of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms)
     */
    #[JsonProperty('email')]
    public ?string $email;

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
     * @var ?int $id id of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms)
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?array<int> $listIds Ids of the lists to add the contact to
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?string $sms SMS of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms)
     */
    #[JsonProperty('sms')]
    public ?string $sms;

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
     *   attributes?: ?array<string, mixed>,
     *   email?: ?string,
     *   emailBlacklisted?: ?bool,
     *   extId?: ?string,
     *   id?: ?int,
     *   listIds?: ?array<int>,
     *   sms?: ?string,
     *   smsBlacklisted?: ?bool,
     *   smtpBlacklistSender?: ?array<string>,
     *   unlinkListIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->emailBlacklisted = $values['emailBlacklisted'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->sms = $values['sms'] ?? null;
        $this->smsBlacklisted = $values['smsBlacklisted'] ?? null;
        $this->smtpBlacklistSender = $values['smtpBlacklistSender'] ?? null;
        $this->unlinkListIds = $values['unlinkListIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
