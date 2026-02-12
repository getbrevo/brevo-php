<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacEmailRequestAttachmentItem extends JsonSerializableType
{
    /**
     * @var ?string $content Base64-encoded attachment data
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?string $name Attachment filename. Required when `content` is provided.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $url Absolute URL of the attachment. Local file paths are not supported.
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   content?: ?string,
     *   name?: ?string,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->name = $values['name'] ?? null;
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
