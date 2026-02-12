<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateSenderRequestIpsItem extends JsonSerializableType
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
     * Weight to apply to the IP. Sum of all IP weights must be
     * 100. Should be passed for either ALL or NONE of the IPs.
     * If it's not passed, the sending will be equally balanced
     * on all IPs.
     *
     * @var ?int $weight
     */
    #[JsonProperty('weight')]
    public ?int $weight;

    /**
     * @param array{
     *   domain: string,
     *   ip: string,
     *   weight?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
        $this->ip = $values['ip'];
        $this->weight = $values['weight'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
