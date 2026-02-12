<?php

namespace Brevo\Conversations\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PutConversationsVisitorGroupResponse extends JsonSerializableType
{
    /**
     * @var mixed $groupId group ID the visitor was assigned to
     */
    #[JsonProperty('groupId')]
    public mixed $groupId;

    /**
     * @var mixed $visitorId visitor ID
     */
    #[JsonProperty('visitorId')]
    public mixed $visitorId;

    /**
     * @param array{
     *   groupId?: mixed,
     *   visitorId?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->groupId = $values['groupId'] ?? null;
        $this->visitorId = $values['visitorId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
