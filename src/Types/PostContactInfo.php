<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostContactInfo extends JsonSerializableType
{
    /**
     * @var PostContactInfoContacts $contacts
     */
    #[JsonProperty('contacts')]
    public PostContactInfoContacts $contacts;

    /**
     * @param array{
     *   contacts: PostContactInfoContacts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contacts = $values['contacts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
