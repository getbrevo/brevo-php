<?php

namespace Brevo\Coupons\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class UpdateCouponCollectionRequest extends JsonSerializableType
{
    /**
     * @var ?string $defaultCoupon A default coupon to be used in case there are no coupons left
     */
    #[JsonProperty('defaultCoupon')]
    public ?string $defaultCoupon;

    /**
     * @var ?DateTime $expirationDate Specify an expiration date for the coupon collection in RFC3339 format. Use null to remove the expiration date.
     */
    #[JsonProperty('expirationDate'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expirationDate;

    /**
     * @var ?int $remainingCouponsAlert Send a notification alert (email) when the remaining coupons count is equal or fall bellow this number. Use null to disable alerts.
     */
    #[JsonProperty('remainingCouponsAlert')]
    public ?int $remainingCouponsAlert;

    /**
     * @var ?int $remainingDaysAlert Send a notification alert (email) when the remaining days until the expiration date are equal or fall bellow this number. Use null to disable alerts.
     */
    #[JsonProperty('remainingDaysAlert')]
    public ?int $remainingDaysAlert;

    /**
     * @param array{
     *   defaultCoupon?: ?string,
     *   expirationDate?: ?DateTime,
     *   remainingCouponsAlert?: ?int,
     *   remainingDaysAlert?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->defaultCoupon = $values['defaultCoupon'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->remainingCouponsAlert = $values['remainingCouponsAlert'] ?? null;
        $this->remainingDaysAlert = $values['remainingDaysAlert'] ?? null;
    }
}
