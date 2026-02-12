<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class CreateVoucherResponse extends JsonSerializableType
{
    /**
     * @var ?string $code Generated code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $consumedAt Timestamp for when this reward was consumed
     */
    #[JsonProperty('consumedAt')]
    public ?string $consumedAt;

    /**
     * @var ?int $contactId Id of the contact that attributed the reward
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?DateTime $createdAt Timestamp for when this reward was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $expirationDate Expiration date of the reward
     */
    #[JsonProperty('expirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expirationDate;

    /**
     * @var ?string $id Unique identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Loyalty Program Id to which attributed reward belongs
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?array<string, mixed> $meta Additional data to define the reward
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $rewardId Unique identifier for the reward
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @var ?DateTime $updatedAt Timestamp for when this reward was updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @var ?float $value Value of the selected reward config
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   code?: ?string,
     *   consumedAt?: ?string,
     *   contactId?: ?int,
     *   createdAt?: ?DateTime,
     *   expirationDate?: ?DateTime,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   rewardId?: ?string,
     *   updatedAt?: ?DateTime,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->consumedAt = $values['consumedAt'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
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
