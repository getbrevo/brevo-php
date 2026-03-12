<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Details for the Products in an order.
 */
class OrderProductsItem extends JsonSerializableType
{
    /**
     * @var float $price The price of a unit of product
     */
    #[JsonProperty('price')]
    public float $price;

    /**
     * @var string $productId ID of the product.
     */
    #[JsonProperty('productId')]
    public string $productId;

    /**
     * @var float $quantity How many pieces of the product the visitor has added to the cart.
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * @var ?string $variantId Product ID of the red color shirts.
     */
    #[JsonProperty('variantId')]
    public ?string $variantId;

    /**
     * @param array{
     *   price: float,
     *   productId: string,
     *   quantity: float,
     *   variantId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->price = $values['price'];
        $this->productId = $values['productId'];
        $this->quantity = $values['quantity'];
        $this->variantId = $values['variantId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
