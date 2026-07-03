<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContactDetails extends JsonSerializableType
{
    /**
     * @var GetContactDetailsAttributes $attributes Set of attributes of the contact
     */
    #[JsonProperty('attributes')]
    public GetContactDetailsAttributes $attributes;

    /**
     * @var string $createdAt Creation UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $email Email address of the contact for which you requested the details
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var bool $emailBlacklisted Blacklist status for email campaigns (true=blacklisted, false=not blacklisted)
     */
    #[JsonProperty('emailBlacklisted')]
    public bool $emailBlacklisted;

    /**
     * @var int $id ID of the contact for which you requested the details
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var array<int> $listIds
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public array $listIds;

    /**
     * @var ?array<int> $listUnsubscribed
     */
    #[JsonProperty('listUnsubscribed'), ArrayType(['integer'])]
    public ?array $listUnsubscribed;

    /**
     * @var string $modifiedAt Last modification UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var bool $smsBlacklisted Blacklist status for SMS campaigns (true=blacklisted, false=not blacklisted)
     */
    #[JsonProperty('smsBlacklisted')]
    public bool $smsBlacklisted;

    /**
     * @var bool $whatsappBlacklisted Blacklist status for WhatsApp campaigns (true=blacklisted, false=not blacklisted)
     */
    #[JsonProperty('whatsappBlacklisted')]
    public bool $whatsappBlacklisted;

    /**
     * @var ?array<ConsentGroupItem> $consentGroups Consent groups the contact belongs to, with their subscription status. Only present when the Consent Groups feature is enabled for your account.
     */
    #[JsonProperty('consentGroups'), ArrayType([ConsentGroupItem::class])]
    public ?array $consentGroups;

    /**
     * @param array{
     *   attributes: GetContactDetailsAttributes,
     *   createdAt: string,
     *   emailBlacklisted: bool,
     *   id: int,
     *   listIds: array<int>,
     *   modifiedAt: string,
     *   smsBlacklisted: bool,
     *   whatsappBlacklisted: bool,
     *   email?: ?string,
     *   listUnsubscribed?: ?array<int>,
     *   consentGroups?: ?array<ConsentGroupItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'];
        $this->createdAt = $values['createdAt'];
        $this->email = $values['email'] ?? null;
        $this->emailBlacklisted = $values['emailBlacklisted'];
        $this->id = $values['id'];
        $this->listIds = $values['listIds'];
        $this->listUnsubscribed = $values['listUnsubscribed'] ?? null;
        $this->modifiedAt = $values['modifiedAt'];
        $this->smsBlacklisted = $values['smsBlacklisted'];
        $this->whatsappBlacklisted = $values['whatsappBlacklisted'];
        $this->consentGroups = $values['consentGroups'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
