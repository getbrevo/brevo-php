<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Information about your transactional email account
 */
class GetAccountResponseRelay extends JsonSerializableType
{
    /**
     * @var GetAccountResponseRelayData $data Data regarding the transactional email account
     */
    #[JsonProperty('data')]
    public GetAccountResponseRelayData $data;

    /**
     * Status of your transactional email Account
     * (true=Enabled, false=Disabled)
     *
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @param array{
     *   data: GetAccountResponseRelayData,
     *   enabled: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->enabled = $values['enabled'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
