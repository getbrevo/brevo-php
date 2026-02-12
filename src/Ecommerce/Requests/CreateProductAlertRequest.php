<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\CreateProductAlertRequestContactIdentifiers;
use Brevo\Core\Json\JsonProperty;

class CreateProductAlertRequest extends JsonSerializableType
{
    /**
     * @var ?CreateProductAlertRequestContactIdentifiers $contactIdentifiers
     */
    #[JsonProperty('contactIdentifiers')]
    public ?CreateProductAlertRequestContactIdentifiers $contactIdentifiers;

    /**
     * @param array{
     *   contactIdentifiers?: ?CreateProductAlertRequestContactIdentifiers,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactIdentifiers = $values['contactIdentifiers'] ?? null;
    }
}
