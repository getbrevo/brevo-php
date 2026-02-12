<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Sender information. Required when `templateId` is not provided. Specify either an email address (with optional name) or a sender ID. The `name` field is ignored when `id` is provided.
 */
class SendTransacEmailRequestSender extends JsonSerializableType
{
    /**
     * @var ?string $email Sender email address. Required when `id` is not provided.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $id Sender identifier. Required when `email` is not provided. Use this field to select a sender with a specific IP pool (dedicated IP users only).
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Display name of the sender. Maximum length is 70 characters. Only applicable when `email` is provided.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email?: ?string,
     *   id?: ?int,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'] ?? null;
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
