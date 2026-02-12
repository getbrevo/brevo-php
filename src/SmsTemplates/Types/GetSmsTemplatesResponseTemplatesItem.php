<?php

namespace Brevo\SmsTemplates\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmsTemplatesResponseTemplatesItem extends JsonSerializableType
{
    /**
     * @var ?int $id ID of the template
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Name of the template
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?bool $shortUrlEnabled URL shortening is enabled
     */
    #[JsonProperty('short_url_enabled')]
    public ?bool $shortUrlEnabled;

    /**
     * @var ?string $message message content for the sms
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?GetSmsTemplatesResponseTemplatesItemCompliance $compliance Manage US compliance
     */
    #[JsonProperty('compliance')]
    public ?GetSmsTemplatesResponseTemplatesItemCompliance $compliance;

    /**
     * @var ?bool $encryption Enable Unicode encryption.
     */
    #[JsonProperty('encryption')]
    public ?bool $encryption;

    /**
     * @var ?bool $unicodeSms Support unicode characters in the sms.
     */
    #[JsonProperty('unicode_sms')]
    public ?bool $unicodeSms;

    /**
     * @var ?string $mediaFile file name of the media.
     */
    #[JsonProperty('media_file')]
    public ?string $mediaFile;

    /**
     * @var ?string $mediaFileSize file size in bytes.
     */
    #[JsonProperty('media_file_size')]
    public ?string $mediaFileSize;

    /**
     * @var ?string $mediaUrl URL of the image.
     */
    #[JsonProperty('media_url')]
    public ?string $mediaUrl;

    /**
     * @var ?string $createdAt Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $updatedAt Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   id?: ?int,
     *   name?: ?string,
     *   shortUrlEnabled?: ?bool,
     *   message?: ?string,
     *   compliance?: ?GetSmsTemplatesResponseTemplatesItemCompliance,
     *   encryption?: ?bool,
     *   unicodeSms?: ?bool,
     *   mediaFile?: ?string,
     *   mediaFileSize?: ?string,
     *   mediaUrl?: ?string,
     *   createdAt?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->shortUrlEnabled = $values['shortUrlEnabled'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->compliance = $values['compliance'] ?? null;
        $this->encryption = $values['encryption'] ?? null;
        $this->unicodeSms = $values['unicodeSms'] ?? null;
        $this->mediaFile = $values['mediaFile'] ?? null;
        $this->mediaFileSize = $values['mediaFileSize'] ?? null;
        $this->mediaUrl = $values['mediaUrl'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
