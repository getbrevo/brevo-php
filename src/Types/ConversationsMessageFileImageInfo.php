<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * image info is passed in case the file is an image
 */
class ConversationsMessageFileImageInfo extends JsonSerializableType
{
    /**
     * @var ?int $height height of the image
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?string $previewUrl URL of the preview
     */
    #[JsonProperty('previewUrl')]
    public ?string $previewUrl;

    /**
     * @var ?int $width Width of the image
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @param array{
     *   height?: ?int,
     *   previewUrl?: ?string,
     *   width?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->height = $values['height'] ?? null;
        $this->previewUrl = $values['previewUrl'] ?? null;
        $this->width = $values['width'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
