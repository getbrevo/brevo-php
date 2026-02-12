<?php

namespace Brevo\Conversations\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostConversationsAgentOnlinePingRequest extends JsonSerializableType
{
    /**
     * @var mixed $agentEmail agent email. When sending online pings from a standalone system, it’s hard to maintain a 1-to-1 relationship between the users of both systems. In this case, an agent can be specified by their email address. If there’s no agent with the specified email address in your Brevo organization, a dummy agent will be created automatically.
     */
    #[JsonProperty('agentEmail')]
    public mixed $agentEmail;

    /**
     * @var mixed $agentId agent ID. It can be found on agent’s page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>. Alternatively, you can use `agentEmail` + `agentName` + `receivedFrom` instead (all 3 fields required).
     */
    #[JsonProperty('agentId')]
    public mixed $agentId;

    /**
     * @var mixed $agentName agent name
     */
    #[JsonProperty('agentName')]
    public mixed $agentName;

    /**
     * @var mixed $receivedFrom mark your messages to distinguish messages created by you from the others.
     */
    #[JsonProperty('receivedFrom')]
    public mixed $receivedFrom;

    /**
     * @param array{
     *   agentEmail?: mixed,
     *   agentId?: mixed,
     *   agentName?: mixed,
     *   receivedFrom?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->agentEmail = $values['agentEmail'] ?? null;
        $this->agentId = $values['agentId'] ?? null;
        $this->agentName = $values['agentName'] ?? null;
        $this->receivedFrom = $values['receivedFrom'] ?? null;
    }
}
