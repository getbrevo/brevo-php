<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Image info, present when the file is an image.
 */
class ConversationsMessageFileImageInfo extends JsonSerializableType
{
    /**
     * @var ?int $width Width of the image in pixels.
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Height of the image in pixels.
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?string $previewLink URL of the image preview.
     */
    #[JsonProperty('previewLink')]
    public ?string $previewLink;

    /**
     * @param array{
     *   width?: ?int,
     *   height?: ?int,
     *   previewLink?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->previewLink = $values['previewLink'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
