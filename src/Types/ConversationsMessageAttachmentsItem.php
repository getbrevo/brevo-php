<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ConversationsMessageAttachmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $fileName The name of the file.
     */
    #[JsonProperty('fileName')]
    public ?string $fileName;

    /**
     * @var ?string $inlineId The ID of the inline file.
     */
    #[JsonProperty('inlineId')]
    public ?string $inlineId;

    /**
     * @var ?bool $isImage `true` for images.
     */
    #[JsonProperty('isImage')]
    public ?bool $isImage;

    /**
     * @var ?string $isInline `true` for inline files.
     */
    #[JsonProperty('isInline')]
    public ?string $isInline;

    /**
     * @var ?int $size The size of the file in bytes.
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @var ?string $url The URL of the file.
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   fileName?: ?string,
     *   inlineId?: ?string,
     *   isImage?: ?bool,
     *   isInline?: ?string,
     *   size?: ?int,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fileName = $values['fileName'] ?? null;
        $this->inlineId = $values['inlineId'] ?? null;
        $this->isImage = $values['isImage'] ?? null;
        $this->isInline = $values['isInline'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->url = $values['url'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
