<?php

namespace Brevo\Coupons\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateCouponsRequest extends JsonSerializableType
{
    /**
     * @var string $collectionId The id of the coupon collection for which the coupons will be created
     */
    #[JsonProperty('collectionId')]
    public string $collectionId;

    /**
     * @var array<string> $coupons
     */
    #[JsonProperty('coupons'), ArrayType(['string'])]
    public array $coupons;

    /**
     * @param array{
     *   collectionId: string,
     *   coupons: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->collectionId = $values['collectionId'];
        $this->coupons = $values['coupons'];
    }
}
