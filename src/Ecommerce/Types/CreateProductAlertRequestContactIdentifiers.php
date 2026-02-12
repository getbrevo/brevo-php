<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateProductAlertRequestContactIdentifiers extends JsonSerializableType
{
    /**
     * @var ?string $email Email address of the contact
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $extId Contact ID in your system
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?string $sms Sms of the contact
     */
    #[JsonProperty('sms')]
    public ?string $sms;

    /**
     * @param array{
     *   email?: ?string,
     *   extId?: ?string,
     *   sms?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->sms = $values['sms'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
