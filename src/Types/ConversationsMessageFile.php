<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ConversationsMessageFile extends JsonSerializableType
{
    /**
     * @var ?string $filename Name of the file
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?ConversationsMessageFileImageInfo $imageInfo image info is passed in case the file is an image
     */
    #[JsonProperty('imageInfo')]
    public ?ConversationsMessageFileImageInfo $imageInfo;

    /**
     * @var ?bool $isImage Whether the file is an image
     */
    #[JsonProperty('isImage')]
    public ?bool $isImage;

    /**
     * @var ?int $size Size in bytes
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @var ?string $url URL of the file
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   filename?: ?string,
     *   imageInfo?: ?ConversationsMessageFileImageInfo,
     *   isImage?: ?bool,
     *   size?: ?int,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filename = $values['filename'] ?? null;
        $this->imageInfo = $values['imageInfo'] ?? null;
        $this->isImage = $values['isImage'] ?? null;
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
