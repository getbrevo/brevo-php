<?php

namespace Brevo\Senders\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Senders\Types\UpdateSenderRequestIpsItem;
use Brevo\Core\Types\ArrayType;

class UpdateSenderRequest extends JsonSerializableType
{
    /**
     * @var ?string $email From Email to update the sender
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * **Only in case of dedicated IP**. IPs to associate to the
     * sender. If passed, will replace all the existing IPs. Not required for standard accounts.
     *
     * @var ?array<UpdateSenderRequestIpsItem> $ips
     */
    #[JsonProperty('ips'), ArrayType([UpdateSenderRequestIpsItem::class])]
    public ?array $ips;

    /**
     * @var ?string $name From Name to update the sender
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email?: ?string,
     *   ips?: ?array<UpdateSenderRequestIpsItem>,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->ips = $values['ips'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
