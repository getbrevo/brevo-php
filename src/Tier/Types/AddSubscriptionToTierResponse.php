<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class AddSubscriptionToTierResponse extends JsonSerializableType
{
    /**
     * @var ?int $contactId Contact to which the tier is assigned
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $groupId Group Id to which the tier is associated
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $id Unique identifier for the assigned tier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Associated loyalty program Id
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta object
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   contactId?: ?int,
     *   createdAt?: ?DateTime,
     *   groupId?: ?string,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
