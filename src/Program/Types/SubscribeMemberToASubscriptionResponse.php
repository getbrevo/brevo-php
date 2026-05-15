<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class SubscribeMemberToASubscriptionResponse extends JsonSerializableType
{
    /**
     * @var ?int $organizationId Unique identifier of the organization.
     */
    #[JsonProperty('organizationId')]
    public ?int $organizationId;

    /**
     * @var ?int $ownerContactId Unique identifier of the subscription owner.
     */
    #[JsonProperty('ownerContactId')]
    public ?int $ownerContactId;

    /**
     * @var ?array<int> $memberContactIds List of unique member contact IDs.
     */
    #[JsonProperty('memberContactIds'), ArrayType(['integer'])]
    public ?array $memberContactIds;

    /**
     * @var ?DateTime $createdAt Timestamp when the subscription member was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp when the subscription member was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   organizationId?: ?int,
     *   ownerContactId?: ?int,
     *   memberContactIds?: ?array<int>,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->organizationId = $values['organizationId'] ?? null;
        $this->ownerContactId = $values['ownerContactId'] ?? null;
        $this->memberContactIds = $values['memberContactIds'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
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
