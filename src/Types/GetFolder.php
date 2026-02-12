<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetFolder extends JsonSerializableType
{
    /**
     * @var int $id ID of the folder
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Name of the folder
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $totalBlacklisted Number of blacklisted contacts in the folder
     */
    #[JsonProperty('totalBlacklisted')]
    public int $totalBlacklisted;

    /**
     * @var int $totalSubscribers Number of contacts in the folder
     */
    #[JsonProperty('totalSubscribers')]
    public int $totalSubscribers;

    /**
     * @var int $uniqueSubscribers Number of unique contacts in the folder
     */
    #[JsonProperty('uniqueSubscribers')]
    public int $uniqueSubscribers;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     *   totalBlacklisted: int,
     *   totalSubscribers: int,
     *   uniqueSubscribers: int,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
