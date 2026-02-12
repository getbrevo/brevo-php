<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAccountResponseMarketingAutomation extends JsonSerializableType
{
    /**
     * Status of Marketing Automation Plateform activation
     * for your account (true=enabled, false=disabled)
     *
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var ?string $key Marketing Automation Tracker ID
     */
    #[JsonProperty('key')]
    public ?string $key;

    /**
     * @param array{
     *   enabled: bool,
     *   key?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->enabled = $values['enabled'];
        $this->key = $values['key'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
