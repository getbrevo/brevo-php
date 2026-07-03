<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class WalletPassInstallUrl extends JsonSerializableType
{
    /**
     * @var string $url The wallet installation URL for the contact. Opening it lets the contact add the pass to their Apple Wallet or Google Wallet.
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
