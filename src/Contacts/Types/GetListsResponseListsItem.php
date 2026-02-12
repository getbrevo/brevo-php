<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetListsResponseListsItem extends JsonSerializableType
{
    /**
     * @var int $id ID of the list
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Name of the list
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $totalBlacklisted Number of blacklisted contacts in the list
     */
    #[JsonProperty('totalBlacklisted')]
    public int $totalBlacklisted;

    /**
     * @var int $totalSubscribers Number of contacts in the list
     */
    #[JsonProperty('totalSubscribers')]
    public int $totalSubscribers;

    /**
     * @var int $uniqueSubscribers Number of unique contacts in the list
     */
    #[JsonProperty('uniqueSubscribers')]
    public int $uniqueSubscribers;

    /**
     * @var int $folderId ID of the folder
     */
    #[JsonProperty('folderId')]
    public int $folderId;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     *   totalBlacklisted: int,
     *   totalSubscribers: int,
     *   uniqueSubscribers: int,
     *   folderId: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->totalBlacklisted = $values['totalBlacklisted'];
        $this->totalSubscribers = $values['totalSubscribers'];
        $this->uniqueSubscribers = $values['uniqueSubscribers'];
        $this->folderId = $values['folderId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
