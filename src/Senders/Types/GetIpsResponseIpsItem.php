<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetIpsResponseIpsItem extends JsonSerializableType
{
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
     * @var int $id ID of the dedicated IP
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $ip Dedicated IP address
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @param array{
     *   active: bool,
     *   domain: string,
     *   id: int,
     *   ip: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'];
        $this->domain = $values['domain'];
        $this->id = $values['id'];
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
