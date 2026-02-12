<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Feature accessiblity given to the user.
 */
class GetInvitedUsersListResponseUsersItemFeatureAccess extends JsonSerializableType
{
    /**
     * @var ?string $conversations Conversations features accessiblity.
     */
    #[JsonProperty('conversations')]
    public ?string $conversations;

    /**
     * @var ?string $crm CRM features accessiblity.
     */
    #[JsonProperty('crm')]
    public ?string $crm;

    /**
     * @var ?string $marketing Marketing features accessiblity.
     */
    #[JsonProperty('marketing')]
    public ?string $marketing;

    /**
     * @param array{
     *   conversations?: ?string,
     *   crm?: ?string,
     *   marketing?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->conversations = $values['conversations'] ?? null;
        $this->crm = $values['crm'] ?? null;
        $this->marketing = $values['marketing'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
