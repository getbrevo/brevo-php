<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponseProductsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $imageUrl
     */
    #[JsonProperty('imageUrl')]
    public ?string $imageUrl;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $ordersCount
     */
    #[JsonProperty('ordersCount')]
    public ?int $ordersCount;

    /**
     * @var ?float $price
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?float $revenue
     */
    #[JsonProperty('revenue')]
    public ?float $revenue;

    /**
     * @var ?string $sku
     */
    #[JsonProperty('sku')]
    public ?string $sku;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   id: string,
     *   imageUrl?: ?string,
     *   name?: ?string,
     *   ordersCount?: ?int,
     *   price?: ?float,
     *   revenue?: ?float,
     *   sku?: ?string,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->ordersCount = $values['ordersCount'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->revenue = $values['revenue'] ?? null;
        $this->sku = $values['sku'] ?? null;
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
