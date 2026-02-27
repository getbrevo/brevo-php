<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class OrderProductsItemQuantityFloat extends JsonSerializableType
{
    /**
     * @var float $quantityFloat **Required if quantity is empty.** Number of product units added to the cart(supports decimals)
     */
    #[JsonProperty('quantityFloat')]
    public float $quantityFloat;

    /**
     * @param array{
     *   quantityFloat: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantityFloat = $values['quantityFloat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
