<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class BadRequestErrorBody extends JsonSerializableType
{
    /**
     * @var value-of<BadRequestErrorBodyCode> $code Error code displayed in case of a failure
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message Readable message associated to the failure
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   code: value-of<BadRequestErrorBodyCode>,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
