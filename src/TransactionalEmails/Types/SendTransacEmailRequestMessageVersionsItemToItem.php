<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacEmailRequestMessageVersionsItemToItem extends JsonSerializableType
{
    /**
     * @var string $email Email address of the recipient
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Display name of the recipient. Maximum length is 70 characters.
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
