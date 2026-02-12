<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetTransacEmailsListResponseTransactionalEmailsItem extends JsonSerializableType
{
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
     * @var ?string $from Email address of the sender from which the email was sent
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var string $messageId Message Id of the sent email
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var string $subject Subject of the sent email
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var ?array<string> $tags Tags used for your email
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var ?int $templateId Id of the template
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @var string $uuid Unique id of the email sent to a particular contact
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @param array{
     *   date: string,
     *   email: string,
     *   messageId: string,
     *   subject: string,
     *   uuid: string,
     *   from?: ?string,
     *   tags?: ?array<string>,
     *   templateId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->email = $values['email'];
        $this->from = $values['from'] ?? null;
        $this->messageId = $values['messageId'];
        $this->subject = $values['subject'];
        $this->tags = $values['tags'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->uuid = $values['uuid'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
