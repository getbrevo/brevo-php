<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCorporateGroupIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetCorporateGroupIdResponseGroup $group
     */
    #[JsonProperty('group')]
    public ?GetCorporateGroupIdResponseGroup $group;

    /**
     * @var ?array<GetCorporateGroupIdResponseSubAccountsItem> $subAccounts
     */
    #[JsonProperty('sub-accounts'), ArrayType([GetCorporateGroupIdResponseSubAccountsItem::class])]
    public ?array $subAccounts;

    /**
     * @var ?array<GetCorporateGroupIdResponseUsersItem> $users
     */
    #[JsonProperty('users'), ArrayType([GetCorporateGroupIdResponseUsersItem::class])]
    public ?array $users;

    /**
     * @param array{
     *   group?: ?GetCorporateGroupIdResponseGroup,
     *   subAccounts?: ?array<GetCorporateGroupIdResponseSubAccountsItem>,
     *   users?: ?array<GetCorporateGroupIdResponseUsersItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->group = $values['group'] ?? null;
        $this->subAccounts = $values['subAccounts'] ?? null;
        $this->users = $values['users'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
