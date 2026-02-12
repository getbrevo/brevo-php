<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\TransactionalEmails\Types\UpdateSmtpTemplateRequestSender;

class UpdateSmtpTemplateRequest extends JsonSerializableType
{
    /**
     * @var ?string $attachmentUrl Absolute url of the attachment (**no local file**). Extensions allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps
     */
    #[JsonProperty('attachmentUrl')]
    public ?string $attachmentUrl;

    /**
     * @var ?string $htmlContent **Required if htmlUrl is empty**. If the template is designed using Drag & Drop editor via HTML content, then the design page will not have Drag & Drop editor access for that template. Body of the message (HTML must have more than 10 characters)
     */
    #[JsonProperty('htmlContent')]
    public ?string $htmlContent;

    /**
     * @var ?string $htmlUrl **Required if htmlContent is empty**. URL to the body of the email (HTML)
     */
    #[JsonProperty('htmlUrl')]
    public ?string $htmlUrl;

    /**
     * @var ?bool $isActive Status of the template. isActive = false means template is inactive, isActive = true means template is active
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?string $replyTo Email on which campaign recipients will be able to reply to
     */
    #[JsonProperty('replyTo')]
    public ?string $replyTo;

    /**
     * @var ?UpdateSmtpTemplateRequestSender $sender Sender details including id or email and name (_optional_). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
     */
    #[JsonProperty('sender')]
    public ?UpdateSmtpTemplateRequestSender $sender;

    /**
     * @var ?string $subject Subject of the email
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $tag Tag of the template
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var ?string $templateName Name of the template
     */
    #[JsonProperty('templateName')]
    public ?string $templateName;

    /**
     * @var ?string $toField To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
     */
    #[JsonProperty('toField')]
    public ?string $toField;

    /**
     * @param array{
     *   attachmentUrl?: ?string,
     *   htmlContent?: ?string,
     *   htmlUrl?: ?string,
     *   isActive?: ?bool,
     *   replyTo?: ?string,
     *   sender?: ?UpdateSmtpTemplateRequestSender,
     *   subject?: ?string,
     *   tag?: ?string,
     *   templateName?: ?string,
     *   toField?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attachmentUrl = $values['attachmentUrl'] ?? null;
        $this->htmlContent = $values['htmlContent'] ?? null;
        $this->htmlUrl = $values['htmlUrl'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
        $this->replyTo = $values['replyTo'] ?? null;
        $this->sender = $values['sender'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->templateName = $values['templateName'] ?? null;
        $this->toField = $values['toField'] ?? null;
    }
}
