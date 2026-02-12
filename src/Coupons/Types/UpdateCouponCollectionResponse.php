<?php

namespace Brevo\Coupons\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateCouponCollectionResponse extends JsonSerializableType
{
    /**
     * @var string $defaultCoupon The default coupon of the collection
     */
    #[JsonProperty('defaultCoupon')]
    public string $defaultCoupon;

    /**
     * @var string $id The id of the collection
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name The name of the collection
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   defaultCoupon: string,
     *   id: string,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->defaultCoupon = $values['defaultCoupon'];
        $this->id = $values['id'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
