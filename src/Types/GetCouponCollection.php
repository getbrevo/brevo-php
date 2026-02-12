<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetCouponCollection extends JsonSerializableType
{
    /**
     * @var DateTime $createdAt Datetime on which the collection was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var string $defaultCoupon The default coupon of the collection.
     */
    #[JsonProperty('defaultCoupon')]
    public string $defaultCoupon;

    /**
     * @var ?DateTime $expirationDate Expiration date for the coupon collection in RFC3339 format.
     */
    #[JsonProperty('expirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expirationDate;

    /**
     * @var string $id The id of the collection.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name The name of the collection.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $remainingCoupons Number of coupons that have not been sent yet.
     */
    #[JsonProperty('remainingCoupons')]
    public int $remainingCoupons;

    /**
     * @var ?int $remainingCouponsAlert If present, an email notification is going to be sent when the total number of available coupons falls below the defined threshold.
     */
    #[JsonProperty('remainingCouponsAlert')]
    public ?int $remainingCouponsAlert;

    /**
     * @var ?int $remainingDaysAlert If present, an email notification is going to be sent the defined amount of days before to the expiration date.
     */
    #[JsonProperty('remainingDaysAlert')]
    public ?int $remainingDaysAlert;

    /**
     * @var int $totalCoupons Total number of coupons in the collection.
     */
    #[JsonProperty('totalCoupons')]
    public int $totalCoupons;

    /**
     * @param array{
     *   createdAt: DateTime,
     *   defaultCoupon: string,
     *   id: string,
     *   name: string,
     *   remainingCoupons: int,
     *   totalCoupons: int,
     *   expirationDate?: ?DateTime,
     *   remainingCouponsAlert?: ?int,
     *   remainingDaysAlert?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->defaultCoupon = $values['defaultCoupon'];
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->remainingCoupons = $values['remainingCoupons'];
        $this->remainingCouponsAlert = $values['remainingCouponsAlert'] ?? null;
        $this->remainingDaysAlert = $values['remainingDaysAlert'] ?? null;
        $this->totalCoupons = $values['totalCoupons'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
