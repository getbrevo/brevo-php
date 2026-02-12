<?php

namespace Brevo\Payments\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreatePaymentRequestResponse extends JsonSerializableType
{
    /**
     * @var int $id ID of the object created
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var ?string $url URL of the payment request created
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   id: int,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->url = $values['url'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
