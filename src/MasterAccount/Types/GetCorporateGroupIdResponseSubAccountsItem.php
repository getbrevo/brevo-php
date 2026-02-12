<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateGroupIdResponseSubAccountsItem extends JsonSerializableType
{
    /**
     * @var ?string $companyName Name of the sub-account organzation
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $createdAt Creation date of the sub-account organzation
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?int $id Id of the sub-account organzation
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @param array{
     *   companyName?: ?string,
     *   createdAt?: ?string,
     *   id?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->companyName = $values['companyName'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->id = $values['id'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
