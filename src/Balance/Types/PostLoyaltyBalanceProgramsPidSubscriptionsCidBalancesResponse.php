<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse extends JsonSerializableType
{
    /**
     * @var ?float $amount The current amount available in the balance
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?string $balanceDefinitionId balance definition ID
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?string $consumedAt Timestamp of when the balance was last consumed
     */
    #[JsonProperty('consumedAt')]
    public ?string $consumedAt;

    /**
     * @var ?int $contactId contact ID
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $createdAt Timestamp of when the balance was created
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $expiresAt Expiration timestamp of the balance
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @var ?string $id Unique identifier for the balance
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId loyalty program ID
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?int $organizationId organization ID
     */
    #[JsonProperty('organizationId')]
    public ?int $organizationId;

    /**
     * @param array{
     *   amount?: ?float,
     *   balanceDefinitionId?: ?string,
     *   consumedAt?: ?string,
     *   contactId?: ?int,
     *   createdAt?: ?string,
     *   expiresAt?: ?string,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   organizationId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->amount = $values['amount'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->consumedAt = $values['consumedAt'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->organizationId = $values['organizationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
