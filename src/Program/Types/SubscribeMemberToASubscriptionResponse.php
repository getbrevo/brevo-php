<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SubscribeMemberToASubscriptionResponse extends JsonSerializableType
{
    /**
     * @var ?string $createdAt Timestamp when the subscription member was created.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?array<int> $memberContactIds List of unique member contact IDs.
     */
    #[JsonProperty('memberContactIds'), ArrayType(['integer'])]
    public ?array $memberContactIds;

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
     * @var ?string $updatedAt Timestamp when the subscription member was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?string,
     *   memberContactIds?: ?array<int>,
     *   organizationId?: ?int,
     *   ownerContactId?: ?int,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->memberContactIds = $values['memberContactIds'] ?? null;
        $this->organizationId = $values['organizationId'] ?? null;
        $this->ownerContactId = $values['ownerContactId'] ?? null;
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
