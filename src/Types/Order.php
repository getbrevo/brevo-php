<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class Order extends JsonSerializableType
{
    /**
     * @var float $amount Total amount of the order, including all shipping expenses, tax and the price of items.
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var ?OrderBilling $billing Billing details of an order.
     */
    #[JsonProperty('billing')]
    public ?OrderBilling $billing;

    /**
     * @var ?array<string> $coupons Coupons applied to the order. Stored case insensitive.
     */
    #[JsonProperty('coupons'), ArrayType(['string'])]
    public ?array $coupons;

    /**
     * @var string $createdAt Event occurrence UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when order is actually created.
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $id Unique ID of the order.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?OrderIdentifiers $identifiers Identifies the contact associated with the order.
     */
    #[JsonProperty('identifiers')]
    public ?OrderIdentifiers $identifiers;

    /**
     * @var ?array<string, (
     *    string
     *   |int
     *   |bool
     * )> $metaInfo Meta data of order to store additional detal such as custom message, customer type, source.
     */
    #[JsonProperty('metaInfo'), ArrayType(['string' => new Union('string', 'integer', 'bool')])]
    public ?array $metaInfo;

    /**
     * @var array<OrderProductsItem> $products
     */
    #[JsonProperty('products'), ArrayType([OrderProductsItem::class])]
    public array $products;

    /**
     * @var string $status State of the order.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $storeId ID of store where the order is placed
     */
    #[JsonProperty('storeId')]
    public ?string $storeId;

    /**
     * @var string $updatedAt Event updated UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when the status of the order is actually changed/updated.
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   amount: float,
     *   createdAt: string,
     *   id: string,
     *   products: array<OrderProductsItem>,
     *   status: string,
     *   updatedAt: string,
     *   billing?: ?OrderBilling,
     *   coupons?: ?array<string>,
     *   identifiers?: ?OrderIdentifiers,
     *   metaInfo?: ?array<string, (
     *    string
     *   |int
     *   |bool
     * )>,
     *   storeId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->billing = $values['billing'] ?? null;
        $this->coupons = $values['coupons'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->identifiers = $values['identifiers'] ?? null;
        $this->metaInfo = $values['metaInfo'] ?? null;
        $this->products = $values['products'];
        $this->status = $values['status'];
        $this->storeId = $values['storeId'] ?? null;
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
