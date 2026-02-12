<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmtpTemplateOverview extends JsonSerializableType
{
    /**
     * @var string $createdAt Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?bool $doiTemplate It is true if template is a valid Double opt-in (DOI) template, otherwise it is false. This field will be available only in case of single template detail call.
     */
    #[JsonProperty('doiTemplate')]
    public ?bool $doiTemplate;

    /**
     * @var string $htmlContent HTML content of the template
     */
    #[JsonProperty('htmlContent')]
    public string $htmlContent;

    /**
     * @var int $id ID of the template
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var bool $isActive Status of template (true=active, false=inactive)
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var string $modifiedAt Last modification UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var string $name Name of the template
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $replyTo Email defined as the "Reply to" for the template
     */
    #[JsonProperty('replyTo')]
    public string $replyTo;

    /**
     * @var GetSmtpTemplateOverviewSender $sender
     */
    #[JsonProperty('sender')]
    public GetSmtpTemplateOverviewSender $sender;

    /**
     * @var string $subject Subject of the template
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var string $tag Tag of the template
     */
    #[JsonProperty('tag')]
    public string $tag;

    /**
     * @var bool $testSent Status of test sending for the template (true=test email has been sent, false=test email has not been sent)
     */
    #[JsonProperty('testSent')]
    public bool $testSent;

    /**
     * @var string $toField Customisation of the "to" field for the template
     */
    #[JsonProperty('toField')]
    public string $toField;

    /**
     * @param array{
     *   createdAt: string,
     *   htmlContent: string,
     *   id: int,
     *   isActive: bool,
     *   modifiedAt: string,
     *   name: string,
     *   replyTo: string,
     *   sender: GetSmtpTemplateOverviewSender,
     *   subject: string,
     *   tag: string,
     *   testSent: bool,
     *   toField: string,
     *   doiTemplate?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->doiTemplate = $values['doiTemplate'] ?? null;
        $this->htmlContent = $values['htmlContent'];
        $this->id = $values['id'];
        $this->isActive = $values['isActive'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->name = $values['name'];
        $this->replyTo = $values['replyTo'];
        $this->sender = $values['sender'];
        $this->subject = $values['subject'];
        $this->tag = $values['tag'];
        $this->testSent = $values['testSent'];
        $this->toField = $values['toField'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
