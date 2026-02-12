<?php

namespace Brevo\Conversations\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostConversationsPushedMessagesRequest extends JsonSerializableType
{
    /**
     * @var mixed $agentId agent ID. It can be found on agent’s page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>.
     */
    #[JsonProperty('agentId')]
    public mixed $agentId;

    /**
     * @var mixed $groupId group ID. It can be found on group’s page.
     */
    #[JsonProperty('groupId')]
    public mixed $groupId;

    /**
     * @var mixed $text
     */
    #[JsonProperty('text')]
    public mixed $text;

    /**
     * @var mixed $visitorId
     */
    #[JsonProperty('visitorId')]
    public mixed $visitorId;

    /**
     * @param array{
     *   text: mixed,
     *   visitorId: mixed,
     *   agentId?: mixed,
     *   groupId?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->agentId = $values['agentId'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->text = $values['text'];
        $this->visitorId = $values['visitorId'];
    }
}
