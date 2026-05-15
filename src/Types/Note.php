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
     * @var ?string $id Unique note Id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var string $text Content of the note. Supports HTML for rich text formatting. Supported tags include: `<p>` (paragraph), `<b>` / `<strong>` (bold), `<i>` / `<em>` (italic), `<u>` (underline), `<br>` (line break), `<a href="...">` (labelled hyperlink). Example labelled link: `<a href="https://example.com">Link text</a>`.
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?array<int> $contactIds Contact ids linked to a note
     */
    #[JsonProperty('contactIds'), ArrayType(['integer'])]
    public ?array $contactIds;

    /**
     * @var ?array<string> $companyIds Company ids linked to a note
     */
    #[JsonProperty('companyIds'), ArrayType(['string'])]
    public ?array $companyIds;

    /**
     * @var ?array<string> $dealIds Deal ids linked to a note
     */
    #[JsonProperty('dealIds'), ArrayType(['string'])]
    public ?array $dealIds;

    /**
     * @var ?array<string, mixed> $authorId Account details of user which created the note
     */
    #[JsonProperty('authorId'), ArrayType(['string' => 'mixed'])]
    public ?array $authorId;

    /**
     * @var ?DateTime $createdAt Note created date/time
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Note updated date/time
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   text: string,
     *   id?: ?string,
     *   contactIds?: ?array<int>,
     *   companyIds?: ?array<string>,
     *   dealIds?: ?array<string>,
     *   authorId?: ?array<string, mixed>,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'] ?? null;
        $this->text = $values['text'];
        $this->contactIds = $values['contactIds'] ?? null;
        $this->companyIds = $values['companyIds'] ?? null;
        $this->dealIds = $values['dealIds'] ?? null;
        $this->authorId = $values['authorId'] ?? null;
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
