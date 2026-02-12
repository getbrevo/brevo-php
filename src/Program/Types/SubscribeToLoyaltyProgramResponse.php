<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SubscribeToLoyaltyProgramResponse extends JsonSerializableType
{
    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $createdAt Timestamp when the subscription was created.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $loyaltySubscriptionId Unique identifier of the subscription.
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?int $organizationId Unique identifier of the organization.
     */
    #[JsonProperty('organizationId')]
    public ?int $organizationId;

    /**
     * @var ?string $updatedAt Timestamp when the subscription was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @var ?int $versionId Version number of the subscription.
     */
    #[JsonProperty('versionId')]
    public ?int $versionId;

    /**
     * @param array{
     *   contactId?: ?int,
     *   createdAt?: ?string,
     *   loyaltyProgramId?: ?string,
     *   loyaltySubscriptionId?: ?string,
     *   organizationId?: ?int,
     *   updatedAt?: ?string,
     *   versionId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->organizationId = $values['organizationId'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->versionId = $values['versionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
