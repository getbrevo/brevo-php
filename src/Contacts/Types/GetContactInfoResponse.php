<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContactInfoResponse extends JsonSerializableType
{
    /**
     * @var GetContactInfoResponseAttributes $attributes Set of attributes of the contact
     */
    #[JsonProperty('attributes')]
    public GetContactInfoResponseAttributes $attributes;

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
     * @var GetContactInfoResponseStatistics $statistics Campaign statistics of the contact
     */
    #[JsonProperty('statistics')]
    public GetContactInfoResponseStatistics $statistics;

    /**
     * @param array{
     *   attributes: GetContactInfoResponseAttributes,
     *   createdAt: string,
     *   emailBlacklisted: bool,
     *   id: int,
     *   listIds: array<int>,
     *   modifiedAt: string,
     *   smsBlacklisted: bool,
     *   statistics: GetContactInfoResponseStatistics,
     *   email?: ?string,
     *   listUnsubscribed?: ?array<int>,
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
        $this->statistics = $values['statistics'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
