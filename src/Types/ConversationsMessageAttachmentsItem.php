<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ConversationsMessageAttachmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $name The name of the file.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $link The URL of the file.
     */
    #[JsonProperty('link')]
    public ?string $link;

    /**
     * @var ?string $mimeType The MIME type of the file.
     */
    #[JsonProperty('mimeType')]
    public ?string $mimeType;

    /**
     * @var ?bool $isImage `true` for images.
     */
    #[JsonProperty('isImage')]
    public ?bool $isImage;

    /**
     * @var ?bool $isSticker `true` for sticker files.
     */
    #[JsonProperty('isSticker')]
    public ?bool $isSticker;

    /**
     * @var ?bool $isInline `true` for inline files.
     */
    #[JsonProperty('isInline')]
    public ?bool $isInline;

    /**
     * @var ?string $inlineId The ID of the inline file.
     */
    #[JsonProperty('inlineId')]
    public ?string $inlineId;

    /**
     * @var ?int $size The size of the file in bytes.
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @var ?ConversationsMessageAttachmentsItemImageInfo $imageInfo Image information (only present for image files).
     */
    #[JsonProperty('imageInfo')]
    public ?ConversationsMessageAttachmentsItemImageInfo $imageInfo;

    /**
     * @var ?bool $isAllowedFileType Whether the file extension is allowed for download.
     */
    #[JsonProperty('isAllowedFileType')]
    public ?bool $isAllowedFileType;

    /**
     * @param array{
     *   name?: ?string,
     *   link?: ?string,
     *   mimeType?: ?string,
     *   isImage?: ?bool,
     *   isSticker?: ?bool,
     *   isInline?: ?bool,
     *   inlineId?: ?string,
     *   size?: ?int,
     *   imageInfo?: ?ConversationsMessageAttachmentsItemImageInfo,
     *   isAllowedFileType?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->link = $values['link'] ?? null;
        $this->mimeType = $values['mimeType'] ?? null;
        $this->isImage = $values['isImage'] ?? null;
        $this->isSticker = $values['isSticker'] ?? null;
        $this->isInline = $values['isInline'] ?? null;
        $this->inlineId = $values['inlineId'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->imageInfo = $values['imageInfo'] ?? null;
        $this->isAllowedFileType = $values['isAllowedFileType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
