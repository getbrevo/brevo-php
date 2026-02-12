<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCorporateSubAccountResponseSubAccountsItem extends JsonSerializableType
{
    /**
     * @var bool $active Whether the sub-account is active or not
     */
    #[JsonProperty('active')]
    public bool $active;

    /**
     * @var string $companyName Name of the sub-account company
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var int $createdAt Timestamp when the sub-account was created
     */
    #[JsonProperty('createdAt')]
    public int $createdAt;

    /**
     * @var array<GetCorporateSubAccountResponseSubAccountsItemGroupsItem> $groups Group details
     */
    #[JsonProperty('groups'), ArrayType([GetCorporateSubAccountResponseSubAccountsItemGroupsItem::class])]
    public array $groups;

    /**
     * @var int $id id of the sub-account
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @param array{
     *   active: bool,
     *   companyName: string,
     *   createdAt: int,
     *   groups: array<GetCorporateSubAccountResponseSubAccountsItemGroupsItem>,
     *   id: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'];
        $this->companyName = $values['companyName'];
        $this->createdAt = $values['createdAt'];
        $this->groups = $values['groups'];
        $this->id = $values['id'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
