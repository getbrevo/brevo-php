<?php

namespace Brevo\Conversations\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PutConversationsVisitorGroupRequest extends JsonSerializableType
{
    /**
     * @var mixed $groupId
     */
    #[JsonProperty('groupId')]
    public mixed $groupId;

    /**
     * @param array{
     *   groupId: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
    }
}
