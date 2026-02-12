<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Data regarding the transactional email account
 */
class GetAccountResponseRelayData extends JsonSerializableType
{
    /**
     * @var int $port Port used for SMTP Relay
     */
    #[JsonProperty('port')]
    public int $port;

    /**
     * @var string $relay URL of the SMTP Relay
     */
    #[JsonProperty('relay')]
    public string $relay;

    /**
     * @var string $userName Email to use as login on transactional platform
     */
    #[JsonProperty('userName')]
    public string $userName;

    /**
     * @param array{
     *   port: int,
     *   relay: string,
     *   userName: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->port = $values['port'];
        $this->relay = $values['relay'];
        $this->userName = $values['userName'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
