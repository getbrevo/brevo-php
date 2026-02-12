<?php

namespace Brevo\InboundParsing\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetInboundEmailEventsByUuidResponseAttachmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $contentId value of the Content-ID header of the attachment.
     */
    #[JsonProperty('contentId')]
    public ?string $contentId;

    /**
     * @var ?int $contentLength size of the attachment in bytes
     */
    #[JsonProperty('contentLength')]
    public ?int $contentLength;

    /**
     * @var ?string $contentType value of the Content-Type header of the attachment
     */
    #[JsonProperty('contentType')]
    public ?string $contentType;

    /**
     * @var ?string $name filename specified in the Content-Disposition header of the attachment
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   contentId?: ?string,
     *   contentLength?: ?int,
     *   contentType?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contentId = $values['contentId'] ?? null;
        $this->contentLength = $values['contentLength'] ?? null;
        $this->contentType = $values['contentType'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
