<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetInvitedUsersListResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetInvitedUsersListResponseUsersItem> $users Get invited users list
     */
    #[JsonProperty('users'), ArrayType([GetInvitedUsersListResponseUsersItem::class])]
    public ?array $users;

    /**
     * @param array{
     *   users?: ?array<GetInvitedUsersListResponseUsersItem>,
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
