<?php

namespace Brevo\Senders\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Senders\Types\CreateSenderRequestIpsItem;
use Brevo\Core\Types\ArrayType;

class CreateSenderRequest extends JsonSerializableType
{
    /**
     * From email to use for the sender. A verification email will be
     * sent to this address.
     *
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * **Mandatory in case of dedicated IP**. IPs to associate to the
     * sender. Not required for standard accounts.
     *
     * @var ?array<CreateSenderRequestIpsItem> $ips
     */
    #[JsonProperty('ips'), ArrayType([CreateSenderRequestIpsItem::class])]
    public ?array $ips;

    /**
     * @var string $name From Name to use for the sender
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   email: string,
     *   name: string,
     *   ips?: ?array<CreateSenderRequestIpsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->ips = $values['ips'] ?? null;
        $this->name = $values['name'];
    }
}
