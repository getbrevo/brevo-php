<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\GetProductsRequestSort;

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
     * @var ?array<string> $categories Filter by categories ids
     */
    public ?array $categories;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    public ?string $createdSince;

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
     *   name?: ?string,
     *   priceLte?: ?float,
     *   priceGte?: ?float,
     *   priceLt?: ?float,
     *   priceGt?: ?float,
     *   priceEq?: ?float,
     *   priceNe?: ?float,
     *   categories?: ?array<string>,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
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
        $this->name = $values['name'] ?? null;
        $this->priceLte = $values['priceLte'] ?? null;
        $this->priceGte = $values['priceGte'] ?? null;
        $this->priceLt = $values['priceLt'] ?? null;
        $this->priceGt = $values['priceGt'] ?? null;
        $this->priceEq = $values['priceEq'] ?? null;
        $this->priceNe = $values['priceNe'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->isDeleted = $values['isDeleted'] ?? null;
    }
}
