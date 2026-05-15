<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetIpsResponseIpsItem extends JsonSerializableType
{
    /**
     * @var int $id ID of the dedicated IP
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var bool $active Status of the IP (true=active, false=inactive)
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var string $domain Domain associated to the IP
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @var string $ip Dedicated IP address
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @param array{
     *   id: int,
     *   active: bool,
     *   domain: string,
     *   ip: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->active = $values['active'];
        $this->domain = $values['domain'];
        $this->ip = $values['ip'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
