<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UploadImageToGalleryResponse extends JsonSerializableType
{
    /**
     * @var ?string $url URL of the image uploaded
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
