<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class RedeemVoucherRequestOrderBilling extends JsonSerializableType
{
    /**
     * @var ?string $address Address of the user
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $city City of the user
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $countryCode Country code of the user
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $paymentMethod Payment method opted by the user
     */
    #[JsonProperty('paymentMethod')]
    public ?string $paymentMethod;

    /**
     * @var ?int $phone Phone number of the user
     */
    #[JsonProperty('phone')]
    public ?int $phone;

    /**
     * @var ?int $postCode Postal Code of user's location
     */
    #[JsonProperty('postCode')]
    public ?int $postCode;

    /**
     * @var ?string $region Region where user resides
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @param array{
     *   address?: ?string,
     *   city?: ?string,
     *   countryCode?: ?string,
     *   paymentMethod?: ?string,
     *   phone?: ?int,
     *   postCode?: ?int,
     *   region?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->address = $values['address'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->paymentMethod = $values['paymentMethod'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->postCode = $values['postCode'] ?? null;
        $this->region = $values['region'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
