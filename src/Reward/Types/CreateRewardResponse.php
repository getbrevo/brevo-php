<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class CreateRewardResponse extends JsonSerializableType
{
    /**
     * @var ?string $id Unique identifier for the reward
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Loyalty program to which the reward belongs
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $name Name of the reward
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $publicDescription Public description of the reward
     */
    #[JsonProperty('publicDescription')]
    public ?string $publicDescription;

    /**
     * @var ?string $publicImage Public image URL of the reward
     */
    #[JsonProperty('publicImage')]
    public ?string $publicImage;

    /**
     * @var ?string $publicName Public name of the reward
     */
    #[JsonProperty('publicName')]
    public ?string $publicName;

    /**
     * @var ?DateTime $createdAt Timestamp when the reward was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp when the reward was last updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   name?: ?string,
     *   publicDescription?: ?string,
     *   publicImage?: ?string,
     *   publicName?: ?string,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->publicDescription = $values['publicDescription'] ?? null;
        $this->publicImage = $values['publicImage'] ?? null;
        $this->publicName = $values['publicName'] ?? null;
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
