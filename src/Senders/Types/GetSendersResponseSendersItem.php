<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSendersResponseSendersItem extends JsonSerializableType
{
    /**
     * @var bool $active Status of sender (true=activated, false=deactivated)
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var string $email From Email associated to the sender
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var int $id Id of the sender
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * List of dedicated IP(s) available in the account. This
     * data is displayed only for dedicated IPs. For standard accounts,
     * this will be an empty array.
     *
     * @var array<GetSendersResponseSendersItemIpsItem> $ips
     */
    #[JsonProperty('ips'), ArrayType([GetSendersResponseSendersItemIpsItem::class])]
    public array $ips;

    /**
     * @var string $name From Name associated to the sender
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   active: bool,
     *   email: string,
     *   id: int,
     *   ips: array<GetSendersResponseSendersItemIpsItem>,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'];
        $this->email = $values['email'];
        $this->id = $values['id'];
        $this->ips = $values['ips'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
