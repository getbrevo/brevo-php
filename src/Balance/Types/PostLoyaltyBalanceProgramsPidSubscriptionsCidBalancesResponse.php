<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier for the balance.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?float $amount The current amount available in the balance.
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?string $loyaltyProgramId Loyalty program ID.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?int $organizationId Organization ID.
     */
    #[JsonProperty('organizationId')]
    public ?int $organizationId;

    /**
     * @var ?int $contactId Contact ID.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $balanceDefinitionId Balance definition ID.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?DateTime $createdAt Timestamp of when the balance was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $expiresAt Expiration timestamp of the balance.
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var ?DateTime $consumedAt Timestamp of when the balance was last consumed.
     */
    #[JsonProperty('consumedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $consumedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   amount?: ?float,
     *   loyaltyProgramId?: ?string,
     *   organizationId?: ?int,
     *   contactId?: ?int,
     *   balanceDefinitionId?: ?string,
     *   createdAt?: ?DateTime,
     *   expiresAt?: ?DateTime,
     *   consumedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->organizationId = $values['organizationId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->consumedAt = $values['consumedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
