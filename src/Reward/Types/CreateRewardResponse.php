<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class CreateRewardResponse extends JsonSerializableType
{
    /**
     * @var ?DateTime $createdAt Timestamp when the reward was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $id Unique identifier for the reward
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Id of the loyalty program to which the current reward belongs to
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $name Name of the reward
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $publicDescription Public description for the reward
     */
    #[JsonProperty('publicDescription')]
    public ?string $publicDescription;

    /**
     * @var ?string $publicImage Public Image for the reward
     */
    #[JsonProperty('publicImage')]
    public ?string $publicImage;

    /**
     * @var ?string $publicName Public name for the reward
     */
    #[JsonProperty('publicName')]
    public ?string $publicName;

    /**
     * @var ?string $updatedAt Timestamp for when this reward was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?DateTime,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   name?: ?string,
     *   publicDescription?: ?string,
     *   publicImage?: ?string,
     *   publicName?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->publicDescription = $values['publicDescription'] ?? null;
        $this->publicImage = $values['publicImage'] ?? null;
        $this->publicName = $values['publicName'] ?? null;
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
