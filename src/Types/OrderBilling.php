<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Billing details of an order.
 */
class OrderBilling extends JsonSerializableType
{
    /**
     * @var ?string $address Full billing address.
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $city Exact city of the address.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $country Billing country name.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $countryCode Billing country 2-letter ISO code.
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $paymentMethod How the visitor will pay for the item(s), e.g. paypal, check, etc.
     */
    #[JsonProperty('paymentMethod')]
    public ?string $paymentMethod;

    /**
     * @var ?string $phone Billing phone number.
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $postCode Postcode for delivery and billing.
     */
    #[JsonProperty('postCode')]
    public ?string $postCode;

    /**
     * @var ?string $region Exact region (state/province) for delivery and billing.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @param array{
     *   address?: ?string,
     *   city?: ?string,
     *   country?: ?string,
     *   countryCode?: ?string,
     *   paymentMethod?: ?string,
     *   phone?: ?string,
     *   postCode?: ?string,
     *   region?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->address = $values['address'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->country = $values['country'] ?? null;
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
