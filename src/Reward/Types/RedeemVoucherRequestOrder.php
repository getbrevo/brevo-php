<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class RedeemVoucherRequestOrder extends JsonSerializableType
{
    /**
     * @var ?float $amount Total amount of the order
     */
    #[JsonProperty('amount')]
    public ?float $amount;

    /**
     * @var ?RedeemVoucherRequestOrderBilling $billing Billing information for the order
     */
    #[JsonProperty('billing')]
    public ?RedeemVoucherRequestOrderBilling $billing;

    /**
     * @var ?int $contactId Unique identifier for the contact
     */
    #[JsonProperty('contact_id')]
    public ?int $contactId;

    /**
     * @var ?array<string> $coupons List of coupon codes applied to the order
     */
    #[JsonProperty('coupons'), ArrayType(['string'])]
    public ?array $coupons;

    /**
     * @var ?DateTime $createdAt Timestamp when the order was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $email Email address associated with the order
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $id Unique identifier for the order
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?RedeemVoucherRequestOrderIdentifiers $identifiers Additional identifiers for the order
     */
    #[JsonProperty('identifiers')]
    public ?RedeemVoucherRequestOrderIdentifiers $identifiers;

    /**
     * @var ?array<RedeemVoucherRequestOrderProductsItem> $products List of products in the order
     */
    #[JsonProperty('products'), ArrayType([RedeemVoucherRequestOrderProductsItem::class])]
    public ?array $products;

    /**
     * @var ?string $status Current status of the order
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $storeId Identifier for the store where the order was placed
     */
    #[JsonProperty('storeId')]
    public ?string $storeId;

    /**
     * @var ?DateTime $updatedAt Timestamp when the order was last updated
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   amount?: ?float,
     *   billing?: ?RedeemVoucherRequestOrderBilling,
     *   contactId?: ?int,
     *   coupons?: ?array<string>,
     *   createdAt?: ?DateTime,
     *   email?: ?string,
     *   id?: ?string,
     *   identifiers?: ?RedeemVoucherRequestOrderIdentifiers,
     *   products?: ?array<RedeemVoucherRequestOrderProductsItem>,
     *   status?: ?string,
     *   storeId?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->amount = $values['amount'] ?? null;
        $this->billing = $values['billing'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->coupons = $values['coupons'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->identifiers = $values['identifiers'] ?? null;
        $this->products = $values['products'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->storeId = $values['storeId'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
