<?php

namespace Brevo\Conversations\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostConversationsAgentOnlinePingRequest extends JsonSerializableType
{
    /**
     * @var ?string $agentEmail Agent's email address. When sending online pings from a standalone system, it's hard to maintain a 1-to-1 relationship between the users of both systems. In this case, an agent can be specified by their email address. If there's no agent with the specified email address in your Brevo organization, a dummy agent will be created automatically.
     */
    #[JsonProperty('agentEmail')]
    public ?string $agentEmail;

    /**
     * @var ?string $agentId Agent ID. It can be found on the agent's page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>. Alternatively, you can use `agentEmail` + `agentName` + `receivedFrom` instead (all 3 fields required).
     */
    #[JsonProperty('agentId')]
    public ?string $agentId;

    /**
     * @var ?string $agentName Agent's name.
     */
    #[JsonProperty('agentName')]
    public ?string $agentName;

    /**
     * @var ?string $receivedFrom Mark your messages to distinguish messages created by you from the others.
     */
    #[JsonProperty('receivedFrom')]
    public ?string $receivedFrom;

    /**
     * @param array{
     *   agentEmail?: ?string,
     *   agentId?: ?string,
     *   agentName?: ?string,
     *   receivedFrom?: ?string,
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
