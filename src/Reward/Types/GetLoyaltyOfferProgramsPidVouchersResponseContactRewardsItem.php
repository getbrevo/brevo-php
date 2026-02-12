<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidVouchersResponseContactRewardsItem extends JsonSerializableType
{
    /**
     * @var ?string $code Generated code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $consumedAt Timestamp when the reward limit was consumed
     */
    #[JsonProperty('consumedAt')]
    public ?string $consumedAt;

    /**
     * @var ?string $createdAt Timestamp when the reward limit was created
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $expirationDate Reward expiration date
     */
    #[JsonProperty('expirationDate')]
    public ?string $expirationDate;

    /**
     * @var ?string $id Unique identifier for the contact
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<string, mixed> $meta Additional data for the reward
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $rewardId Unique identifier for the reward
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @var ?string $unit Unit of the balance selected in the reward definition
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $updatedAt Timestamp when the reward limit was updated
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @var ?float $value Value of the selected reward config
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   code?: ?string,
     *   consumedAt?: ?string,
     *   createdAt?: ?string,
     *   expirationDate?: ?string,
     *   id?: ?string,
     *   meta?: ?array<string, mixed>,
     *   rewardId?: ?string,
     *   unit?: ?string,
     *   updatedAt?: ?string,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->consumedAt = $values['consumedAt'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
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
