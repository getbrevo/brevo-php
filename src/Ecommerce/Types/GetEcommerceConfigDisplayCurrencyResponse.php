<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetEcommerceConfigDisplayCurrencyResponse extends JsonSerializableType
{
    /**
     * @var string $code ISO 4217 compliant display currency code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @param array{
     *   code: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
