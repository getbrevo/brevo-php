<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateListRequest extends JsonSerializableType
{
    /**
     * @var ?int $folderId Id of the folder in which the list is to be moved. Either of the two parameters (name, folderId) can be updated at a time.
     */
    #[JsonProperty('folderId')]
    public ?int $folderId;

    /**
     * @var ?string $name Name of the list. Either of the two parameters (name, folderId) can be updated at a time.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   folderId?: ?int,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->folderId = $values['folderId'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
