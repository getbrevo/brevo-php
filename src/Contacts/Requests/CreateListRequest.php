<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateListRequest extends JsonSerializableType
{
    /**
     * @var int $folderId Id of the parent folder in which this list is to be created
     */
    #[JsonProperty('folderId')]
    public int $folderId;

    /**
     * @var string $name Name of the list
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   folderId: int,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->folderId = $values['folderId'];
        $this->name = $values['name'];
    }
}
