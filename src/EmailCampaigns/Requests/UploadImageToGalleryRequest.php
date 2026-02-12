<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UploadImageToGalleryRequest extends JsonSerializableType
{
    /**
     * @var string $imageUrl The absolute url of the image (**no local file**). Maximum allowed size for image is **2MB**. Allowed extensions for images are: #### jpeg, jpg, png, bmp, gif.
     */
    #[JsonProperty('imageUrl')]
    public string $imageUrl;

    /**
     * @var ?string $name Name of the image.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   imageUrl: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imageUrl = $values['imageUrl'];
        $this->name = $values['name'] ?? null;
    }
}
