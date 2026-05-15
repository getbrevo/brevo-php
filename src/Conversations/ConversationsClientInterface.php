<?php

namespace Brevo\Conversations;

use Brevo\Conversations\Requests\PostConversationsAgentOnlinePingRequest;
use Brevo\Conversations\Requests\PostConversationsMessagesRequest;
use Brevo\Types\ConversationsMessage;
use Brevo\Conversations\Requests\PutConversationsMessagesIdRequest;
use Brevo\Conversations\Requests\PostConversationsPushedMessagesRequest;
use Brevo\Conversations\Requests\PutConversationsPushedMessagesIdRequest;
use Brevo\Conversations\Requests\PutConversationsVisitorGroupRequest;
use Brevo\Conversations\Types\PutConversationsVisitorGroupResponse;

interface ConversationsClientInterface
{
    /**
     * Sets the agent's status to online for 2-3 minutes. We recommend pinging this endpoint every minute for as long as the agent has to be considered online. You must provide either `agentId` alone, or all three of `agentEmail` + `agentName` + `receivedFrom`.
     *
     * @param PostConversationsAgentOnlinePingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function setsAgentsStatusToOnlineFor23Minutes(PostConversationsAgentOnlinePingRequest $request = new PostConversationsAgentOnlinePingRequest(), ?array $options = null): void;

    /**
     * Send a message as an agent to an existing visitor's conversation. You must provide either `agentId` alone, or all three of `agentEmail` + `agentName` + `receivedFrom` to identify the agent.
     *
     * @param PostConversationsMessagesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function sendAMessageAsAnAgent(PostConversationsMessagesRequest $request, ?array $options = null): ?ConversationsMessage;

    /**
     * Retrieve a single message by its ID.
     *
     * @param string $id ID of the message
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function getAMessage(string $id, ?array $options = null): ?ConversationsMessage;

    /**
     * Update the text of a message sent by an agent. Only messages of type `agent` can be edited. The `text` and `html` fields of the message will be updated.
     *
     * @param string $id ID of the message
     * @param PutConversationsMessagesIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function updateAMessageSentByAnAgent(string $id, PutConversationsMessagesIdRequest $request, ?array $options = null): ?ConversationsMessage;

    /**
     * Delete a message sent by an agent. Only messages of type `agent` can be deleted.
     *
     * @param string $id ID of the message
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAMessageSentByAnAgent(string $id, ?array $options = null): void;

    /**
     * Send an automated (pushed) message to a visitor on behalf of an agent. Example use cases: order status updates, announcing new features in your web app, etc.
     *
     * @param PostConversationsPushedMessagesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function sendAnAutomatedMessageToAVisitor(PostConversationsPushedMessagesRequest $request, ?array $options = null): ?ConversationsMessage;

    /**
     * Retrieve a single automated (pushed) message by its ID.
     *
     * @param string $id ID of the message sent previously
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function getAnAutomatedMessage(string $id, ?array $options = null): ?ConversationsMessage;

    /**
     * Update the text of an automated (pushed) message. The `text` and `html` fields of the message will be updated.
     *
     * @param string $id ID of the message
     * @param PutConversationsPushedMessagesIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConversationsMessage
     */
    public function updateAnAutomatedMessage(string $id, PutConversationsPushedMessagesIdRequest $request, ?array $options = null): ?ConversationsMessage;

    /**
     * Delete an automated (pushed) message by its ID.
     *
     * @param string $id ID of the message
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAnAutomatedMessage(string $id, ?array $options = null): void;

    /**
     * Assigns a visitor to a specific agent group or removes them from their current group.
     *
     * @param PutConversationsVisitorGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PutConversationsVisitorGroupResponse
     */
    public function setVisitorGroupAssignment(PutConversationsVisitorGroupRequest $request, ?array $options = null): ?PutConversationsVisitorGroupResponse;
}
