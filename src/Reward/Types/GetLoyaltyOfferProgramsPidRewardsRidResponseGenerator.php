<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class GetLoyaltyOfferProgramsPidRewardsRidResponseGenerator extends JsonSerializableType
{
    /**
     * @var ?string $createdAt Timestamp when the reward was created
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $description Public facing description of the reward
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $id Unique identifier for the reward
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Name of the reward
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $pattern Generated pattern
     */
    #[JsonProperty('pattern')]
    public ?string $pattern;

    /**
     * @var ?DateTime $updatedAt Timestamp when the reward was created
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?string,
     *   description?: ?string,
     *   id?: ?string,
     *   name?: ?string,
     *   pattern?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
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
