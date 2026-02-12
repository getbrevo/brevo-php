<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * To create a new list and import the contacts into it, pass the listName and an optional folderId.
 */
class ImportContactsRequestNewList extends JsonSerializableType
{
    /**
     * @var ?int $folderId Id of the folder where this new list shall be created. **Mandatory if listName is not empty**
     */
    #[JsonProperty('folderId')]
    public ?int $folderId;

    /**
     * @var ?string $listName List with listName will be created first and users will be imported in it. **Mandatory if listIds is empty**.
     */
    #[JsonProperty('listName')]
    public ?string $listName;

    /**
     * @param array{
     *   folderId?: ?int,
     *   listName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->folderId = $values['folderId'] ?? null;
        $this->listName = $values['listName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
