<?php

namespace Brevo\ExternalFeeds\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAllExternalFeedsResponseFeedsItemHeadersItem extends JsonSerializableType
{
    /**
     * @var string $name Header name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $value Header value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   name: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
