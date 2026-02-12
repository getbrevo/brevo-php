<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetProductDetails;
use Brevo\Core\Types\ArrayType;

class GetProductsResponse extends JsonSerializableType
{
    /**
     * @var int $count Number of products
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var array<GetProductDetails> $products
     */
    #[JsonProperty('products'), ArrayType([GetProductDetails::class])]
    public array $products;

    /**
     * @param array{
     *   count: int,
     *   products: array<GetProductDetails>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->count = $values['count'];
        $this->products = $values['products'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
