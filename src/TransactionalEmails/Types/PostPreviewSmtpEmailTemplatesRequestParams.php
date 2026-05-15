<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Key-value pairs of dynamic parameters for template rendering.(Required if email not provided) For example: **{"Firstname":"John", "Lastname":"Doe"}**
 */
class PostPreviewSmtpEmailTemplatesRequestParams extends JsonSerializableType
{
    /**
     * @var ?string $firstname firstname of the contact. **Dynamic parameter**
     */
    #[JsonProperty('Firstname')]
    public ?string $firstname;

    /**
     * @var ?string $lastname Lastname of the contact. **Dynamic parameter**
     */
    #[JsonProperty('Lastname')]
    public ?string $lastname;

    /**
     * @param array{
     *   firstname?: ?string,
     *   lastname?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->firstname = $values['firstname'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
