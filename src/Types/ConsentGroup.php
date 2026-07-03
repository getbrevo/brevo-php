<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * A consent group representing a category of contact opt-in/opt-out preferences.
 */
class ConsentGroup extends JsonSerializableType
{
    /**
     * @var int $id Unique identifier for the consent group
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Display name of the consent group
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description Optional description of the consent group
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var value-of<ConsentGroupSignupMode> $signupMode Controls how contacts are added to the group. `manual` — contacts are added explicitly via the API. `automatic` — contacts are added automatically at signup.
     */
    #[JsonProperty('signupMode')]
    public string $signupMode;

    /**
     * @var int $contactsCount Number of contacts currently in this consent group
     */
    #[JsonProperty('contactsCount')]
    public int $contactsCount;

    /**
     * @var bool $isDefault Whether this is a system-created default consent group
     */
    #[JsonProperty('isDefault')]
    public bool $isDefault;

    /**
     * @var DateTime $createdAt UTC date-time when the consent group was created (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt UTC date-time when the consent group was last updated (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     *   signupMode: value-of<ConsentGroupSignupMode>,
     *   contactsCount: int,
     *   isDefault: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->signupMode = $values['signupMode'];
        $this->contactsCount = $values['contactsCount'];
        $this->isDefault = $values['isDefault'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
