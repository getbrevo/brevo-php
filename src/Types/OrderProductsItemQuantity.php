<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class OrderProductsItemQuantity extends JsonSerializableType
{
    /**
     * @var int $quantity **Required if quantityFloat is empty.** Number of product units added to the cart (whole numbers only)
     */
    #[JsonProperty('quantity')]
    public int $quantity;

    /**
     * @param array{
     *   quantity: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
