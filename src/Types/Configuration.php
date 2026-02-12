<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Optional. Redirect contact to a custom success page once payment is successful. If empty the default Brevo page will be displayed once a payment is validated
 */
class Configuration extends JsonSerializableType
{
    /**
     * @var string $customSuccessUrl Absolute URL of the custom success page.
     */
    #[JsonProperty('customSuccessUrl')]
    public string $customSuccessUrl;

    /**
     * @param array{
     *   customSuccessUrl: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->customSuccessUrl = $values['customSuccessUrl'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
