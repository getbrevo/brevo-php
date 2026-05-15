<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class GetLoyaltyBalanceProgramsPidActiveBalanceResponseActiveBalancesItem extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier of the balance entry.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?float $amount Current balance amount.
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?DateTime $createdAt Timestamp when the balance was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $expiresAt Timestamp when the balance expires (if applicable).
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @param array{
     *   id?: ?string,
     *   amount?: ?float,
     *   createdAt?: ?DateTime,
     *   expiresAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
