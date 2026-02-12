<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetParameterSubscriptionInfoResponseTierItem extends JsonSerializableType
{
    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $createdAt Timestamp when the tier was assigned.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $groupId Unique identifier of the group associated with the tier.
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Additional metadata related to the tier.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $tierId Unique identifier of the tier.
     */
    #[JsonProperty('tierId')]
    public ?string $tierId;

    /**
     * @var ?string $updatedAt Timestamp when the tier was last updated
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   contactId?: ?int,
     *   createdAt?: ?string,
     *   groupId?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   tierId?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->tierId = $values['tierId'] ?? null;
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
