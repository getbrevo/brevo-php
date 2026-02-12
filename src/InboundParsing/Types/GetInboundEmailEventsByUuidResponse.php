<?php

namespace Brevo\InboundParsing\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class GetInboundEmailEventsByUuidResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetInboundEmailEventsByUuidResponseAttachmentsItem> $attachments List of attachments of the email. This will be present only after the processing is done.
     */
    #[JsonProperty('attachments'), ArrayType([GetInboundEmailEventsByUuidResponseAttachmentsItem::class])]
    public ?array $attachments;

    /**
     * @var ?DateTime $deliveredAt Date when email was delivered successfully to client_dev’s webhook
     */
    #[JsonProperty('deliveredAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $deliveredAt;

    /**
     * @var ?array<GetInboundEmailEventsByUuidResponseLogsItem> $logs List of events/logs that describe the lifecycle of the email on SIB platform
     */
    #[JsonProperty('logs'), ArrayType([GetInboundEmailEventsByUuidResponseLogsItem::class])]
    public ?array $logs;

    /**
     * @var ?string $messageId Value of the Message-ID header. This will be present only after the processing is done.
     */
    #[JsonProperty('messageId')]
    public ?string $messageId;

    /**
     * @var ?DateTime $receivedAt Date when email was received on SMTP relay
     */
    #[JsonProperty('receivedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $receivedAt;

    /**
     * @var ?string $recipient Recipient’s email address
     */
    #[JsonProperty('recipient')]
    public ?string $recipient;

    /**
     * @var ?string $sender Sender’s email address
     */
    #[JsonProperty('sender')]
    public ?string $sender;

    /**
     * @var ?string $subject Value of the Subject header. This will be present only after the processing is done.
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @param array{
     *   attachments?: ?array<GetInboundEmailEventsByUuidResponseAttachmentsItem>,
     *   deliveredAt?: ?DateTime,
     *   logs?: ?array<GetInboundEmailEventsByUuidResponseLogsItem>,
     *   messageId?: ?string,
     *   receivedAt?: ?DateTime,
     *   recipient?: ?string,
     *   sender?: ?string,
     *   subject?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attachments = $values['attachments'] ?? null;
        $this->deliveredAt = $values['deliveredAt'] ?? null;
        $this->logs = $values['logs'] ?? null;
        $this->messageId = $values['messageId'] ?? null;
        $this->receivedAt = $values['receivedAt'] ?? null;
        $this->recipient = $values['recipient'] ?? null;
        $this->sender = $values['sender'] ?? null;
        $this->subject = $values['subject'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
