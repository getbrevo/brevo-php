<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * Note Details
 */
class Note extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $authorId Account details of user which created the note
     */
    #[JsonProperty('authorId'), ArrayType(['string' => 'mixed'])]
    public ?array $authorId;

    /**
     * @var ?array<int> $contactIds Contact ids linked to a note
     */
    #[JsonProperty('contactIds'), ArrayType(['integer'])]
    public ?array $contactIds;

    /**
     * @var ?DateTime $createdAt Note created date/time
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?array<string> $dealIds Deal ids linked to a note
     */
    #[JsonProperty('dealIds'), ArrayType(['string'])]
    public ?array $dealIds;

    /**
     * @var ?string $id Unique note Id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var string $text Text content of a note
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?DateTime $updatedAt Note updated date/time
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   text: string,
     *   authorId?: ?array<string, mixed>,
     *   contactIds?: ?array<int>,
     *   createdAt?: ?DateTime,
     *   dealIds?: ?array<string>,
     *   id?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->authorId = $values['authorId'] ?? null;
        $this->contactIds = $values['contactIds'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->dealIds = $values['dealIds'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->text = $values['text'];
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
