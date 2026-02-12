<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetTransacEmailContentResponse extends JsonSerializableType
{
    /**
     * @var int $attachmentCount Count of the attachments that were sent in the email
     */
    #[JsonProperty('attachmentCount')]
    public int $attachmentCount;

    /**
     * @var string $body Actual content of the transactional email that has been sent
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var string $date Date on which transactional email was sent
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $email Email address to which transactional email has been sent
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var array<GetTransacEmailContentResponseEventsItem> $events Series of events which occurred on the transactional email
     */
    #[JsonProperty('events'), ArrayType([GetTransacEmailContentResponseEventsItem::class])]
    public array $events;

    /**
     * @var string $subject Subject of the sent email
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var ?int $templateId Id of the template
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @param array{
     *   attachmentCount: int,
     *   body: string,
     *   date: string,
     *   email: string,
     *   events: array<GetTransacEmailContentResponseEventsItem>,
     *   subject: string,
     *   templateId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attachmentCount = $values['attachmentCount'];
        $this->body = $values['body'];
        $this->date = $values['date'];
        $this->email = $values['email'];
        $this->events = $values['events'];
        $this->subject = $values['subject'];
        $this->templateId = $values['templateId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
