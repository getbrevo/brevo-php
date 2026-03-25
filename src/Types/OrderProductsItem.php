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
     * @var ?string $variantId Product ID of the red color shirts.
     */
    #[JsonProperty('variantId')]
    public ?string $variantId;

    /**
     * **Required if quantityFloat is empty.**
     *
     * Number of product units added to the cart (whole numbers only, e.g., 10)
     *
     * @var ?int $quantity
     */
    #[JsonProperty('quantity')]
    public ?int $quantity;

    /**
     * **Required if quantity is empty.**
     *
     * Number of product units added to the cart(supports decimals, e.g., 20.52)
     *
     * @var ?float $quantityFloat
     */
    #[JsonProperty('quantityFloat')]
    public ?float $quantityFloat;

    /**
     * @param array{
     *   price: float,
     *   productId: string,
     *   variantId?: ?string,
     *   quantity?: ?int,
     *   quantityFloat?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->price = $values['price'];
        $this->productId = $values['productId'];
        $this->variantId = $values['variantId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->quantityFloat = $values['quantityFloat'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
