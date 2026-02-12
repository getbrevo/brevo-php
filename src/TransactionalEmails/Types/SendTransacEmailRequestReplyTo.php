<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Reply-to email address (required) and optional display name. Recipients will use this address when replying to the email.
 */
class SendTransacEmailRequestReplyTo extends JsonSerializableType
{
    /**
     * @var string $email Email address in reply to
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Display name for the reply-to address. Maximum length is 70 characters.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
