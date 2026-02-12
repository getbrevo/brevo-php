<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacEmailRequestMessageVersionsItemBccItem extends JsonSerializableType
{
    /**
     * @var string $email BCC recipient email address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Display name of the BCC recipient. Maximum length is 70 characters.
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
