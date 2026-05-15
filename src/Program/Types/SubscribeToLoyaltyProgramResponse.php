<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class SubscribeToLoyaltyProgramResponse extends JsonSerializableType
{
    /**
     * @var ?int $organizationId Unique identifier of the organization.
     */
    #[JsonProperty('organizationId')]
    public ?int $organizationId;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?int $versionId Version number of the subscription.
     */
    #[JsonProperty('versionId')]
    public ?int $versionId;

    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Unique identifier of the subscription.
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?array<string, mixed> $meta Metadata associated with the subscription.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?DateTime $createdAt Timestamp when the subscription was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp when the subscription was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   organizationId?: ?int,
     *   loyaltyProgramId?: ?string,
     *   versionId?: ?int,
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->organizationId = $values['organizationId'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->versionId = $values['versionId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->meta = $values['meta'] ?? null;
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
