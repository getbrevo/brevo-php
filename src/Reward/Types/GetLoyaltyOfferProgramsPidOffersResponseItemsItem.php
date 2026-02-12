<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetLoyaltyOfferProgramsPidOffersResponseItemsItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $createdAt Timestamp for when this reward was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $endDate Timestamp for when this reward attribution ended
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $endDate;

    /**
     * @var ?string $id Unique identifier for the reward
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $loyaltyProgramId Loyalty Program to which current reward is associated
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?string $name Name of the reward
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $publicImage Public image of the reward
     */
    #[JsonProperty('publicImage')]
    public ?string $publicImage;

    /**
     * @var ?DateTime $startDate Timestamp for when this reward attribution started
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $startDate;

    /**
     * @var ?string $state State of the reward
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?DateTime $updatedAt Timestamp for when this reward attribution was updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?DateTime,
     *   endDate?: ?DateTime,
     *   id?: ?string,
     *   loyaltyProgramId?: ?string,
     *   name?: ?string,
     *   publicImage?: ?string,
     *   startDate?: ?DateTime,
     *   state?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->publicImage = $values['publicImage'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->state = $values['state'] ?? null;
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
