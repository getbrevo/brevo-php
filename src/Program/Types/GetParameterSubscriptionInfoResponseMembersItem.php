<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetParameterSubscriptionInfoResponseMembersItem extends JsonSerializableType
{
    /**
     * @var ?string $createdAt Timestamp when the member was created.
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?int $memberContactId Unique identifier of the member.
     */
    #[JsonProperty('memberContactId')]
    public ?int $memberContactId;

    /**
     * @var ?string $updatedAt Timestamp when the member was last updated.
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?string,
     *   memberContactId?: ?int,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->memberContactId = $values['memberContactId'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
