<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\UpdateBatchContactsRequestContactsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpdateBatchContactsRequest extends JsonSerializableType
{
    /**
     * @var ?array<UpdateBatchContactsRequestContactsItem> $contacts List of contacts to be updated
     */
    #[JsonProperty('contacts'), ArrayType([UpdateBatchContactsRequestContactsItem::class])]
    public ?array $contacts;

    /**
     * @param array{
     *   contacts?: ?array<UpdateBatchContactsRequestContactsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contacts = $values['contacts'] ?? null;
    }
}
