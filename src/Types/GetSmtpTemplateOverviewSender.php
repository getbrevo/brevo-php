<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmtpTemplateOverviewSender extends JsonSerializableType
{
    /**
     * @var ?string $email From email for the template
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $id Sender id of the template
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name From email for the template
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email?: ?string,
     *   id?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
