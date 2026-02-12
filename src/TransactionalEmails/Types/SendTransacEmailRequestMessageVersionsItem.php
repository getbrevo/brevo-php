<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SendTransacEmailRequestMessageVersionsItem extends JsonSerializableType
{
    /**
     * @var ?array<SendTransacEmailRequestMessageVersionsItemBccItem> $bcc Array of BCC recipient objects. Each object contains an email address and an optional name.
     */
    #[JsonProperty('bcc'), ArrayType([SendTransacEmailRequestMessageVersionsItemBccItem::class])]
    public ?array $bcc;

    /**
     * @var ?array<SendTransacEmailRequestMessageVersionsItemCcItem> $cc Array of CC recipient objects. Each object contains an email address and an optional name.
     */
    #[JsonProperty('cc'), ArrayType([SendTransacEmailRequestMessageVersionsItemCcItem::class])]
    public ?array $cc;

    /**
     * @var ?string $htmlContent HTML body content of the email. Required when `templateId` is not provided. Ignored when `templateId` is provided.
     */
    #[JsonProperty('htmlContent')]
    public ?string $htmlContent;

    /**
     * @var ?array<string, mixed> $params Key-value pairs for template variable substitution. Only applicable when the template uses the New Template Language format.
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var ?SendTransacEmailRequestMessageVersionsItemReplyTo $replyTo Reply-to email address (required) and optional display name. Recipients will use this address when replying to the email.
     */
    #[JsonProperty('replyTo')]
    public ?SendTransacEmailRequestMessageVersionsItemReplyTo $replyTo;

    /**
     * @var ?string $subject Email subject line for this message version
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $textContent Plain text body content of the email. Ignored when `templateId` is provided.
     */
    #[JsonProperty('textContent')]
    public ?string $textContent;

    /**
     * @var array<SendTransacEmailRequestMessageVersionsItemToItem> $to Array of recipient objects. Each object contains an email address and an optional display name.
     */
    #[JsonProperty('to'), ArrayType([SendTransacEmailRequestMessageVersionsItemToItem::class])]
    public array $to;

    /**
     * @param array{
     *   to: array<SendTransacEmailRequestMessageVersionsItemToItem>,
     *   bcc?: ?array<SendTransacEmailRequestMessageVersionsItemBccItem>,
     *   cc?: ?array<SendTransacEmailRequestMessageVersionsItemCcItem>,
     *   htmlContent?: ?string,
     *   params?: ?array<string, mixed>,
     *   replyTo?: ?SendTransacEmailRequestMessageVersionsItemReplyTo,
     *   subject?: ?string,
     *   textContent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bcc = $values['bcc'] ?? null;
        $this->cc = $values['cc'] ?? null;
        $this->htmlContent = $values['htmlContent'] ?? null;
        $this->params = $values['params'] ?? null;
        $this->replyTo = $values['replyTo'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->textContent = $values['textContent'] ?? null;
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
