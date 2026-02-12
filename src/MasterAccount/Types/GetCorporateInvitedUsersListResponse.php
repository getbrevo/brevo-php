<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCorporateInvitedUsersListResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetCorporateInvitedUsersListResponseUsersItem> $users Get invited users list
     */
    #[JsonProperty('users'), ArrayType([GetCorporateInvitedUsersListResponseUsersItem::class])]
    public ?array $users;

    /**
     * @param array{
     *   users?: ?array<GetCorporateInvitedUsersListResponseUsersItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
