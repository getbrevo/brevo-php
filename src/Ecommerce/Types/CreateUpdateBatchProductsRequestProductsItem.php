<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class CreateUpdateBatchProductsRequestProductsItem extends JsonSerializableType
{
    /**
     * @var ?array<string> $categories Category ID-s of the product
     */
    #[JsonProperty('categories'), ArrayType(['string'])]
    public ?array $categories;

    /**
     * @var ?string $deletedAt UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the product deleted from the shop's database
     */
    #[JsonProperty('deletedAt')]
    public ?string $deletedAt;

    /**
     * @var string $id Product ID for which you requested the details
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $imageUrl Absolute URL to the cover image of the product
     */
    #[JsonProperty('imageUrl')]
    public ?string $imageUrl;

    /**
     * @var ?bool $isDeleted product deleted from the shop's database
     */
    #[JsonProperty('isDeleted')]
    public ?bool $isDeleted;

    /**
     * @var ?array<string, (
     *    string
     *   |int
     * )> $metaInfo Meta data of product such as description, vendor, producer, stock level. The size of cumulative metaInfo shall not exceed **1000 KB**. Maximum length of metaInfo object can be 20.
     */
    #[JsonProperty('metaInfo'), ArrayType(['string' => new Union('string', 'integer')])]
    public ?array $metaInfo;

    /**
     * @var string $name Mandatory in case of creation**. Name of the product for which you requested the details
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $parentId Parent product id of the product
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var ?float $price Price of the product
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?string $sku Product identifier from the shop
     */
    #[JsonProperty('sku')]
    public ?string $sku;

    /**
     * @var ?float $stock Current stock value of the product from the shop's database
     */
    #[JsonProperty('stock')]
    public ?float $stock;

    /**
     * @var ?string $url URL to the product
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   categories?: ?array<string>,
     *   deletedAt?: ?string,
     *   imageUrl?: ?string,
     *   isDeleted?: ?bool,
     *   metaInfo?: ?array<string, (
     *    string
     *   |int
     * )>,
     *   parentId?: ?string,
     *   price?: ?float,
     *   sku?: ?string,
     *   stock?: ?float,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->categories = $values['categories'] ?? null;
        $this->deletedAt = $values['deletedAt'] ?? null;
        $this->id = $values['id'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->isDeleted = $values['isDeleted'] ?? null;
        $this->metaInfo = $values['metaInfo'] ?? null;
        $this->name = $values['name'];
        $this->parentId = $values['parentId'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->sku = $values['sku'] ?? null;
        $this->stock = $values['stock'] ?? null;
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
