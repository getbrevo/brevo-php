<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetTransacBlockedContactsResponseContactsItem extends JsonSerializableType
{
    /**
     * @var string $blockedAt Date when the contact was blocked or unsubscribed on
     */
    #[JsonProperty('blockedAt')]
    public string $blockedAt;

    /**
     * @var string $email Email address of the blocked or unsubscribed contact
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var GetTransacBlockedContactsResponseContactsItemReason $reason Reason for blocking / unsubscribing
     */
    #[JsonProperty('reason')]
    public GetTransacBlockedContactsResponseContactsItemReason $reason;

    /**
     * @var string $senderEmail Sender email address of the blocked or unsubscribed contact
     */
    #[JsonProperty('senderEmail')]
    public string $senderEmail;

    /**
     * @param array{
     *   blockedAt: string,
     *   email: string,
     *   reason: GetTransacBlockedContactsResponseContactsItemReason,
     *   senderEmail: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->blockedAt = $values['blockedAt'];
        $this->email = $values['email'];
        $this->reason = $values['reason'];
        $this->senderEmail = $values['senderEmail'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
