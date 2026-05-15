<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\GetProductsRequestSort;
use Brevo\Ecommerce\Types\GetProductsRequestSortByField;

class GetProductsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetProductsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?array<string> $ids Filter by product ids
     */
    public ?array $ids;

    /**
     * @var ?string $search Search products simultaneously across SKU, name, and ID fields. Results are returned in the following priority order: **exact SKU match** > **SKU prefix match** > **name match** > **ID match**. For example, `?search=123` on products with `{sku: "123"}` and `{sku: "123456"}` returns the exact SKU match first.
     */
    public ?string $search;

    /**
     * @var ?string $name Filter by product name, minimum 3 characters should be present for search.
     */
    public ?string $name;

    /**
     * @var ?float $priceLte Price filter for products less than and equals to particular amount
     */
    public ?float $priceLte;

    /**
     * @var ?float $priceGte Price filter for products greater than and equals to particular amount
     */
    public ?float $priceGte;

    /**
     * @var ?float $priceLt Price filter for products less than particular amount
     */
    public ?float $priceLt;

    /**
     * @var ?float $priceGt Price filter for products greater than particular amount
     */
    public ?float $priceGt;

    /**
     * @var ?float $priceEq Price filter for products equals to particular amount
     */
    public ?float $priceEq;

    /**
     * @var ?float $priceNe Price filter for products not equals to particular amount
     */
    public ?float $priceNe;

    /**
     * @var ?float $alternativePriceLte Alternative price filter for products less than and equals to particular amount
     */
    public ?float $alternativePriceLte;

    /**
     * @var ?float $alternativePriceGte Alternative price filter for products greater than and equals to particular amount
     */
    public ?float $alternativePriceGte;

    /**
     * @var ?float $alternativePriceLt Alternative price filter for products less than particular amount
     */
    public ?float $alternativePriceLt;

    /**
     * @var ?float $alternativePriceGt Alternative price filter for products greater than particular amount
     */
    public ?float $alternativePriceGt;

    /**
     * @var ?float $alternativePriceEq Alternative price filter for products equals to particular amount
     */
    public ?float $alternativePriceEq;

    /**
     * @var ?float $alternativePriceNe Alternative price filter for products not equals to particular amount
     */
    public ?float $alternativePriceNe;

    /**
     * @var ?array<string> $categories Filter by categories ids
     */
    public ?array $categories;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the products modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the products created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $createdSince;

    /**
     * @var ?value-of<GetProductsRequestSortByField> $sortByField Sort the results by a specific field. Default sort field is `created_at` when not passed.
     */
    public ?string $sortByField;

    /**
     * @var ?string $isDeleted Filter products by their deletion status. If `false` is passed, only products that are not deleted will be returned.
     */
    public ?string $isDeleted;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetProductsRequestSort>,
     *   ids?: ?array<string>,
     *   search?: ?string,
     *   name?: ?string,
     *   priceLte?: ?float,
     *   priceGte?: ?float,
     *   priceLt?: ?float,
     *   priceGt?: ?float,
     *   priceEq?: ?float,
     *   priceNe?: ?float,
     *   alternativePriceLte?: ?float,
     *   alternativePriceGte?: ?float,
     *   alternativePriceLt?: ?float,
     *   alternativePriceGt?: ?float,
     *   alternativePriceEq?: ?float,
     *   alternativePriceNe?: ?float,
     *   categories?: ?array<string>,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   sortByField?: ?value-of<GetProductsRequestSortByField>,
     *   isDeleted?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->ids = $values['ids'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->priceLte = $values['priceLte'] ?? null;
        $this->priceGte = $values['priceGte'] ?? null;
        $this->priceLt = $values['priceLt'] ?? null;
        $this->priceGt = $values['priceGt'] ?? null;
        $this->priceEq = $values['priceEq'] ?? null;
        $this->priceNe = $values['priceNe'] ?? null;
        $this->alternativePriceLte = $values['alternativePriceLte'] ?? null;
        $this->alternativePriceGte = $values['alternativePriceGte'] ?? null;
        $this->alternativePriceLt = $values['alternativePriceLt'] ?? null;
        $this->alternativePriceGt = $values['alternativePriceGt'] ?? null;
        $this->alternativePriceEq = $values['alternativePriceEq'] ?? null;
        $this->alternativePriceNe = $values['alternativePriceNe'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->sortByField = $values['sortByField'] ?? null;
        $this->isDeleted = $values['isDeleted'] ?? null;
    }
}
