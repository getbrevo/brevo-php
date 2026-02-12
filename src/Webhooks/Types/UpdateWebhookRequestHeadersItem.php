<?php

namespace Brevo\Webhooks\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateWebhookRequestHeadersItem extends JsonSerializableType
{
    /**
     * @var ?string $key Header key name
     */
    #[JsonProperty('key')]
    public ?string $key;

    /**
     * @var ?string $value Header value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   key?: ?string,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->key = $values['key'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
