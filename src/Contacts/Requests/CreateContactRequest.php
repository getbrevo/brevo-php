<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class CreateContactRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )> $attributes Pass the set of attributes and their values. The attribute's parameter should be passed in capital letter while creating a contact. Values that don't match the attribute type (e.g. text or string in a date attribute) will be ignored. **These attributes must be present in your Brevo account**. For eg: **{"FNAME":"Elly", "LNAME":"Roger", "COUNTRIES": ["India","China"]}**
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('float', 'string', 'bool', ['string'])])]
    public ?array $attributes;

    /**
     * @var ?string $email Email address of the user. **Mandatory if "ext_id"  & "SMS" field is not passed.**
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?bool $emailBlacklisted Set this field to blacklist the contact for emails (emailBlacklisted = true)
     */
    #[JsonProperty('emailBlacklisted')]
    public ?bool $emailBlacklisted;

    /**
     * @var ?string $extId Pass your own Id to create a contact.
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?array<int> $listIds Ids of the lists to add the contact to
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?bool $smsBlacklisted Set this field to blacklist the contact for SMS (smsBlacklisted = true)
     */
    #[JsonProperty('smsBlacklisted')]
    public ?bool $smsBlacklisted;

    /**
     * @var ?array<string> $smtpBlacklistSender transactional email forbidden sender for contact. Use only for email Contact ( only available if updateEnabled = true )
     */
    #[JsonProperty('smtpBlacklistSender'), ArrayType(['string'])]
    public ?array $smtpBlacklistSender;

    /**
     * @var ?bool $updateEnabled Facilitate to update the existing contact in the same request (updateEnabled = true)
     */
    #[JsonProperty('updateEnabled')]
    public ?bool $updateEnabled;

    /**
     * @param array{
     *   attributes?: ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )>,
     *   email?: ?string,
     *   emailBlacklisted?: ?bool,
     *   extId?: ?string,
     *   listIds?: ?array<int>,
     *   smsBlacklisted?: ?bool,
     *   smtpBlacklistSender?: ?array<string>,
     *   updateEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->emailBlacklisted = $values['emailBlacklisted'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->smsBlacklisted = $values['smsBlacklisted'] ?? null;
        $this->smtpBlacklistSender = $values['smtpBlacklistSender'] ?? null;
        $this->updateEnabled = $values['updateEnabled'] ?? null;
    }
}
