<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\GetContactInfoRequestIdentifierType;

class GetContactInfoRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetContactInfoRequestIdentifierType> $identifierType email_id for Email, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute
     */
    public ?string $identifierType;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate.
     */
    public ?string $endDate;

    /**
     * @param array{
     *   identifierType?: ?value-of<GetContactInfoRequestIdentifierType>,
     *   startDate?: ?string,
     *   endDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifierType = $values['identifierType'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
    }
}
