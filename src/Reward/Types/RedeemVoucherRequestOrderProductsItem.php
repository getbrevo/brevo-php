<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RedeemVoucherRequestOrderProductsItem extends JsonSerializableType
{
    /**
     * @var ?array<string> $category List of categories the product belongs to
     */
    #[JsonProperty('category'), ArrayType(['string'])]
    public ?array $category;

    /**
     * @var ?float $price Price of the product
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?string $productId Unique identifier for the product
     */
    #[JsonProperty('productId')]
    public ?string $productId;

    /**
     * @var ?float $quantity Quantity of the product
     */
    #[JsonProperty('quantity')]
    public ?float $quantity;

    /**
     * @var ?string $variantId Identifier for the product variant
     */
    #[JsonProperty('variantId')]
    public ?string $variantId;

    /**
     * @param array{
     *   category?: ?array<string>,
     *   price?: ?float,
     *   productId?: ?string,
     *   quantity?: ?float,
     *   variantId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->category = $values['category'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
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
