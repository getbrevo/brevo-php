<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Address informations
 */
class GetAccountResponseAddress extends JsonSerializableType
{
    /**
     * @var string $city City information
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $country Country information
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $street Street information
     */
    #[JsonProperty('street')]
    public string $street;

    /**
     * @var string $zipCode Zip Code information
     */
    #[JsonProperty('zipCode')]
    public string $zipCode;

    /**
     * @param array{
     *   city: string,
     *   country: string,
     *   street: string,
     *   zipCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->city = $values['city'];
        $this->country = $values['country'];
        $this->street = $values['street'];
        $this->zipCode = $values['zipCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
