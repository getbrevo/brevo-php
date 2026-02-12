<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSendersResponseSendersItemIpsItem extends JsonSerializableType
{
    /**
     * @var string $domain Domain of the IP
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @var string $ip Dedicated IP available in your account
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
     *   ip: string,
     *   weight: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
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
