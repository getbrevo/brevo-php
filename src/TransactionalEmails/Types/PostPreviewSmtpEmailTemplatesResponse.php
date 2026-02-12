<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PostPreviewSmtpEmailTemplatesResponse extends JsonSerializableType
{
    /**
     * @var ?string $fromEmail Sender email address
     */
    #[JsonProperty('fromEmail')]
    public ?string $fromEmail;

    /**
     * @var ?string $fromName Sender Name
     */
    #[JsonProperty('fromName')]
    public ?string $fromName;

    /**
     * @var ?string $html Html content of the template
     */
    #[JsonProperty('html')]
    public ?string $html;

    /**
     * @var ?string $previewText Preview text of the template
     */
    #[JsonProperty('previewText')]
    public ?string $previewText;

    /**
     * @var ?string $subject subject of the template
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?array<string> $usedFeedNames
     */
    #[JsonProperty('usedFeedNames'), ArrayType(['string'])]
    public ?array $usedFeedNames;

    /**
     * @param array{
     *   fromEmail?: ?string,
     *   fromName?: ?string,
     *   html?: ?string,
     *   previewText?: ?string,
     *   subject?: ?string,
     *   usedFeedNames?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fromEmail = $values['fromEmail'] ?? null;
        $this->fromName = $values['fromName'] ?? null;
        $this->html = $values['html'] ?? null;
        $this->previewText = $values['previewText'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->usedFeedNames = $values['usedFeedNames'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
