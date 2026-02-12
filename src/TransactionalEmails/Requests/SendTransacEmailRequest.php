<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestAttachmentItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestBccItem;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestCcItem;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestMessageVersionsItem;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestReplyTo;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;

class SendTransacEmailRequest extends JsonSerializableType
{
    /**
     * @var ?array<SendTransacEmailRequestAttachmentItem> $attachment Array of attachment objects. Each attachment must include either an absolute URL (no local file paths) or base64-encoded content, along with the attachment filename. The `name` field is required when `content` is provided. Supported file extensions: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub, eps, odt, mp3, m4a, m4v, wma, ogg, flac, wav, aif, aifc, aiff, mp4, mov, avi, mkv, mpeg, mpg, wmv, pkpass, xlsm. When `templateId` is specified: if the template uses the New Template Language format, both `url` and `content` attachment types are supported; if the template uses the Old Template Language format, the `attachment` parameter is ignored.
     */
    #[JsonProperty('attachment'), ArrayType([SendTransacEmailRequestAttachmentItem::class])]
    public ?array $attachment;

    /**
     * @var ?string $batchId UUIDv4 identifier for the scheduled batch of transactional emails. If omitted, a valid UUIDv4 batch identifier is automatically generated.
     */
    #[JsonProperty('batchId')]
    public ?string $batchId;

    /**
     * @var ?array<SendTransacEmailRequestBccItem> $bcc Array of BCC recipient objects. Each object contains an email address and an optional name.
     */
    #[JsonProperty('bcc'), ArrayType([SendTransacEmailRequestBccItem::class])]
    public ?array $bcc;

    /**
     * @var ?array<SendTransacEmailRequestCcItem> $cc Array of CC recipient objects. Each object contains an email address and an optional name.
     */
    #[JsonProperty('cc'), ArrayType([SendTransacEmailRequestCcItem::class])]
    public ?array $cc;

    /**
     * @var ?array<string, mixed> $headers Custom email headers (non-standard headers) to include in the email. The `sender.ip` header can be set to specify the IP address used for sending transactional emails (dedicated IP users only). Header names must use Title-Case-Format (words separated by hyphens with the first letter of each word capitalized). Headers not in this format are automatically converted. Standard email headers are not supported. Example: `{"sender.ip":"1.2.3.4", "X-Mailin-custom":"some_custom_value", "Idempotency-Key":"abc-123"}`
     */
    #[JsonProperty('headers'), ArrayType(['string' => 'mixed'])]
    public ?array $headers;

    /**
     * @var ?string $htmlContent HTML body content of the email. Required when `templateId` is not provided. Ignored when `templateId` is provided.
     */
    #[JsonProperty('htmlContent')]
    public ?string $htmlContent;

    /**
     * @var ?array<SendTransacEmailRequestMessageVersionsItem> $messageVersions Array of message version objects for sending customized email variants. The `templateId` can be customized per version only if a global `templateId` is provided. The `htmlContent` and `textContent` can be customized per version only if at least one of these is present in the global parameters. Global parameters such as `to` (required), `bcc`, `cc`, `replyTo`, and `subject` can be customized per version. Maximum total recipients per API request is 2000. Maximum recipients per message version is 99. Individual `params` objects must not exceed 100 KB. Cumulative `params` across all versions must not exceed 1000 KB. See https://developers.brevo.com/docs/batch-send-transactional-emails for detailed usage instructions.
     */
    #[JsonProperty('messageVersions'), ArrayType([SendTransacEmailRequestMessageVersionsItem::class])]
    public ?array $messageVersions;

    /**
     * @var ?array<string, mixed> $params Key-value pairs for template variable substitution. Only applicable when the template uses the New Template Language format.
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var ?SendTransacEmailRequestReplyTo $replyTo Reply-to email address (required) and optional display name. Recipients will use this address when replying to the email.
     */
    #[JsonProperty('replyTo')]
    public ?SendTransacEmailRequestReplyTo $replyTo;

    /**
     * @var ?DateTime $scheduledAt UTC date-time when the email should be sent (format: YYYY-MM-DDTHH:mm:ss.SSSZ). Include timezone information in the date-time value. Scheduled emails may be delayed by up to 5 minutes.
     */
    #[JsonProperty('scheduledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $scheduledAt;

    /**
     * @var ?SendTransacEmailRequestSender $sender Sender information. Required when `templateId` is not provided. Specify either an email address (with optional name) or a sender ID. The `name` field is ignored when `id` is provided.
     */
    #[JsonProperty('sender')]
    public ?SendTransacEmailRequestSender $sender;

    /**
     * @var ?string $subject Email subject line. Required when `templateId` is not provided.
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?array<string> $tags Array of tags for categorizing and filtering emails
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var ?int $templateId Template identifier
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @var ?string $textContent Plain text body content of the email. Ignored when `templateId` is provided.
     */
    #[JsonProperty('textContent')]
    public ?string $textContent;

    /**
     * @var ?array<SendTransacEmailRequestToItem> $to Array of recipient objects. Each object contains an email address and an optional display name. Required when `messageVersions` is not provided. Ignored when `messageVersions` is provided. Example: `[{"name":"Jimmy", "email":"jimmy@example.com"}, {"name":"Joe", "email":"joe@example.com"}]`
     */
    #[JsonProperty('to'), ArrayType([SendTransacEmailRequestToItem::class])]
    public ?array $to;

    /**
     * @param array{
     *   attachment?: ?array<SendTransacEmailRequestAttachmentItem>,
     *   batchId?: ?string,
     *   bcc?: ?array<SendTransacEmailRequestBccItem>,
     *   cc?: ?array<SendTransacEmailRequestCcItem>,
     *   headers?: ?array<string, mixed>,
     *   htmlContent?: ?string,
     *   messageVersions?: ?array<SendTransacEmailRequestMessageVersionsItem>,
     *   params?: ?array<string, mixed>,
     *   replyTo?: ?SendTransacEmailRequestReplyTo,
     *   scheduledAt?: ?DateTime,
     *   sender?: ?SendTransacEmailRequestSender,
     *   subject?: ?string,
     *   tags?: ?array<string>,
     *   templateId?: ?int,
     *   textContent?: ?string,
     *   to?: ?array<SendTransacEmailRequestToItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attachment = $values['attachment'] ?? null;
        $this->batchId = $values['batchId'] ?? null;
        $this->bcc = $values['bcc'] ?? null;
        $this->cc = $values['cc'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->htmlContent = $values['htmlContent'] ?? null;
        $this->messageVersions = $values['messageVersions'] ?? null;
        $this->params = $values['params'] ?? null;
        $this->replyTo = $values['replyTo'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sender = $values['sender'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->textContent = $values['textContent'] ?? null;
        $this->to = $values['to'] ?? null;
    }
}
