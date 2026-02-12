<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetIpsFromSenderResponseIpsItem extends JsonSerializableType
{
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
     * @var int $weight Weight of the IP for this sender
     */
    #[JsonProperty('weight')]
    public int $weight;

    /**
     * @param array{
     *   domain: string,
     *   id: int,
     *   ip: string,
     *   weight: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
        $this->id = $values['id'];
        $this->ip = $values['ip'];
        $this->weight = $values['weight'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
