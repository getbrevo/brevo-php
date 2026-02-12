<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse extends JsonSerializableType
{
    /**
     * @var array<GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponseProductsItem> $products List of attributed products
     */
    #[JsonProperty('products'), ArrayType([GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponseProductsItem::class])]
    public array $products;

    /**
     * @param array{
     *   products: array<GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponseProductsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
