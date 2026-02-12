<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetProductDetails extends JsonSerializableType
{
    /**
     * @var ?array<string> $categories Category ID-s of the product
     */
    #[JsonProperty('categories'), ArrayType(['string'])]
    public ?array $categories;

    /**
     * @var string $createdAt Creation UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

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
     * @var ?bool $isDeleted Product get deleted from the shop's database but not from Brevo
     */
    #[JsonProperty('isDeleted')]
    public ?bool $isDeleted;

    /**
     * @var ?array<string, mixed> $metaInfo Meta data of product such as description, vendor, producer, stock level, etc.
     */
    #[JsonProperty('metaInfo'), ArrayType(['string' => 'mixed'])]
    public ?array $metaInfo;

    /**
     * @var string $modifiedAt Last modification UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var string $name Name of the product for which you requested the details
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
     * @var ?string $s3Original S3 url of original image
     */
    #[JsonProperty('s3Original')]
    public ?string $s3Original;

    /**
     * @var string $s3ThumbAnalytics S3 thumbnail url of original image in 120x120 dimension for analytics section
     */
    #[JsonProperty('s3ThumbAnalytics')]
    public string $s3ThumbAnalytics;

    /**
     * @var string $s3ThumbEditor S3 thumbnail url of original image in 600x400 dimension for editor section
     */
    #[JsonProperty('s3ThumbEditor')]
    public string $s3ThumbEditor;

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
     *   createdAt: string,
     *   id: string,
     *   modifiedAt: string,
     *   name: string,
     *   s3ThumbAnalytics: string,
     *   s3ThumbEditor: string,
     *   categories?: ?array<string>,
     *   imageUrl?: ?string,
     *   isDeleted?: ?bool,
     *   metaInfo?: ?array<string, mixed>,
     *   parentId?: ?string,
     *   price?: ?float,
     *   s3Original?: ?string,
     *   sku?: ?string,
     *   stock?: ?float,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->categories = $values['categories'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->isDeleted = $values['isDeleted'] ?? null;
        $this->metaInfo = $values['metaInfo'] ?? null;
        $this->modifiedAt = $values['modifiedAt'];
        $this->name = $values['name'];
        $this->parentId = $values['parentId'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->s3Original = $values['s3Original'] ?? null;
        $this->s3ThumbAnalytics = $values['s3ThumbAnalytics'];
        $this->s3ThumbEditor = $values['s3ThumbEditor'];
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
