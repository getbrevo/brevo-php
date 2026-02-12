<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SetConfigDisplayCurrencyRequest extends JsonSerializableType
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
}
