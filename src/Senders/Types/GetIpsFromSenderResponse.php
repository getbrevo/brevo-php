<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetIpsFromSenderResponse extends JsonSerializableType
{
    /**
     * Dedicated IP(s) linked to a sender. Returns empty array for standard accounts
     * without dedicated IPs.
     *
     * @var array<GetIpsFromSenderResponseIpsItem> $ips
     */
    #[JsonProperty('ips'), ArrayType([GetIpsFromSenderResponseIpsItem::class])]
    public array $ips;

    /**
     * @param array{
     *   ips: array<GetIpsFromSenderResponseIpsItem>,
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
