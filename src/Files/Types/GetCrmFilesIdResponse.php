<?php

namespace Brevo\Files\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Downloadable file link
 */
class GetCrmFilesIdResponse extends JsonSerializableType
{
    /**
     * @var ?string $fileUrl A unique link to download the requested file.
     */
    #[JsonProperty('fileUrl')]
    public ?string $fileUrl;

    /**
     * @param array{
     *   fileUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fileUrl = $values['fileUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
