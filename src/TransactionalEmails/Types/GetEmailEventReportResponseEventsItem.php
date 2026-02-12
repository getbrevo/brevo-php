<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetEmailEventReportResponseEventsItem extends JsonSerializableType
{
    /**
     * @var string $date UTC date-time on which the event has been generated
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $email Email address which generates the event
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var value-of<GetEmailEventReportResponseEventsItemEvent> $event Event which occurred
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * @var ?string $from Sender email from which the emails are sent
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?string $ip IP from which the user has opened the email or clicked on the link (only available if the event is opened or clicks)
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?string $link The link which is sent to the user (only available if the event is requests or opened or clicks)
     */
    #[JsonProperty('link')]
    public ?string $link;

    /**
     * @var string $messageId Message ID which generated the event
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var ?string $reason Reason of bounce (only available if the event is hardbounce or softbounce)
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?string $subject Subject of the event
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $tag Tag of the email which generated the event
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var ?int $templateId ID of the template (only available if the email is template based)
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @param array{
     *   date: string,
     *   email: string,
     *   event: value-of<GetEmailEventReportResponseEventsItemEvent>,
     *   messageId: string,
     *   from?: ?string,
     *   ip?: ?string,
     *   link?: ?string,
     *   reason?: ?string,
     *   subject?: ?string,
     *   tag?: ?string,
     *   templateId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->email = $values['email'];
        $this->event = $values['event'];
        $this->from = $values['from'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->link = $values['link'] ?? null;
        $this->messageId = $values['messageId'];
        $this->reason = $values['reason'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->tag = $values['tag'] ?? null;
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
