<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetIpsResponse extends JsonSerializableType
{
    /**
     * Dedicated IP(s) available on your account. Returns empty array
     * for standard accounts without dedicated IPs.
     *
     * @var array<GetIpsResponseIpsItem> $ips
     */
    #[JsonProperty('ips'), ArrayType([GetIpsResponseIpsItem::class])]
    public array $ips;

    /**
     * @param array{
     *   ips: array<GetIpsResponseIpsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ips = $values['ips'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
