<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class GetParameterSubscriptionInfoResponseRewardItem extends JsonSerializableType
{
    /**
     * @var ?string $code Reward code assigned to the contact.
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $createdAt Timestamp when the reward was created.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $expirationDate Expiration date of the reward.
     */
    #[JsonProperty('expirationDate')]
    public ?string $expirationDate;

    /**
     * @var ?string $id Unique identifier of the reward.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Additional metadata related to the reward.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $publicDescription Customer-facing description of the reward, as configured on the reward definition.
     */
    #[JsonProperty('publicDescription')]
    public ?string $publicDescription;

    /**
     * @var ?string $rewardId Unique identifier of the reward definition.
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @var ?string $rewardName Customer-facing name of the reward. Falls back to the internal reward name when no public name is set.
     */
    #[JsonProperty('rewardName')]
    public ?string $rewardName;

    /**
     * @var ?value-of<GetParameterSubscriptionInfoResponseRewardItemUnit> $unit Unit the reward's value is expressed in — one of the currency codes listed below, or PERCENT. Omitted when the reward has no unit (e.g. free-product rewards).
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?DateTime $updatedAt Timestamp when the reward was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @var ?DateTime $validFrom Date from which the voucher becomes valid.
     */
    #[JsonProperty('validFrom'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $validFrom;

    /**
     * @var ?float $value The value recorded when this reward was attributed to the contact — a snapshot, not necessarily the reward's current configured value. Omitted when not set.
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   code?: ?string,
     *   contactId?: ?int,
     *   createdAt?: ?string,
     *   expirationDate?: ?string,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   publicDescription?: ?string,
     *   rewardId?: ?string,
     *   rewardName?: ?string,
     *   unit?: ?value-of<GetParameterSubscriptionInfoResponseRewardItemUnit>,
     *   updatedAt?: ?DateTime,
     *   validFrom?: ?DateTime,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->publicDescription = $values['publicDescription'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
        $this->rewardName = $values['rewardName'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->validFrom = $values['validFrom'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
