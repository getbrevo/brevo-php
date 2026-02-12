<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateUpdateCategoryRequest extends JsonSerializableType
{
    /**
     * @var ?string $deletedAt UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the category deleted from the shop's database
     */
    #[JsonProperty('deletedAt')]
    public ?string $deletedAt;

    /**
     * @var string $id Unique Category ID as saved in the shop
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?bool $isDeleted category deleted from the shop's database
     */
    #[JsonProperty('isDeleted')]
    public ?bool $isDeleted;

    /**
     * @var ?string $name **Mandatory in case of creation**. Name of the Category, as displayed in the shop
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?bool $updateEnabled Facilitate to update the existing category in the same request (updateEnabled = true)
     */
    #[JsonProperty('updateEnabled')]
    public ?bool $updateEnabled;

    /**
     * @var ?string $url URL to the category
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   id: string,
     *   deletedAt?: ?string,
     *   isDeleted?: ?bool,
     *   name?: ?string,
     *   updateEnabled?: ?bool,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deletedAt = $values['deletedAt'] ?? null;
        $this->id = $values['id'];
        $this->isDeleted = $values['isDeleted'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->updateEnabled = $values['updateEnabled'] ?? null;
        $this->url = $values['url'] ?? null;
    }
}
