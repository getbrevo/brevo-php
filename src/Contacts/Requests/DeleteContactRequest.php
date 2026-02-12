<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\DeleteContactRequestIdentifierType;

class DeleteContactRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<DeleteContactRequestIdentifierType> $identifierType email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute
     */
    public ?string $identifierType;

    /**
     * @param array{
     *   identifierType?: ?value-of<DeleteContactRequestIdentifierType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifierType = $values['identifierType'] ?? null;
    }
}
