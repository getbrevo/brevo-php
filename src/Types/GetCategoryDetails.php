<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCategoryDetails extends JsonSerializableType
{
    /**
     * @var string $createdAt Creation UTC date-time of the category (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $id Category ID for which you requested the details
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var bool $isDeleted category deleted from the shop's database
     */
    #[JsonProperty('isDeleted')]
    public bool $isDeleted;

    /**
     * @var string $modifiedAt Last modification UTC date-time of the category (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var string $name Name of the category for which you requested the details
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $url URL to the category
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   createdAt: string,
     *   id: string,
     *   isDeleted: bool,
     *   modifiedAt: string,
     *   name: string,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->isDeleted = $values['isDeleted'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->name = $values['name'];
        $this->url = $values['url'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
