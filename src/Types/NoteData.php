<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Note data to be saved
 */
class NoteData extends JsonSerializableType
{
    /**
     * @var ?array<string> $companyIds Company Ids linked to a note
     */
    #[JsonProperty('companyIds'), ArrayType(['string'])]
    public ?array $companyIds;

    /**
     * @var ?array<int> $contactIds Contact Ids linked to a note
     */
    #[JsonProperty('contactIds'), ArrayType(['integer'])]
    public ?array $contactIds;

    /**
     * @var ?array<string> $dealIds Deal Ids linked to a note
     */
    #[JsonProperty('dealIds'), ArrayType(['string'])]
    public ?array $dealIds;

    /**
     * @var string $text Content of the note. Supports HTML for rich text formatting. Supported tags include: `<p>` (paragraph), `<b>` / `<strong>` (bold), `<i>` / `<em>` (italic), `<u>` (underline), `<br>` (line break), `<a href="...">` (labelled hyperlink). Example labelled link: `<a href="https://example.com">Link text</a>`.
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   text: string,
     *   companyIds?: ?array<string>,
     *   contactIds?: ?array<int>,
     *   dealIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyIds = $values['companyIds'] ?? null;
        $this->contactIds = $values['contactIds'] ?? null;
        $this->dealIds = $values['dealIds'] ?? null;
        $this->text = $values['text'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
