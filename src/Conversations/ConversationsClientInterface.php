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
     * We recommend pinging this endpoint every minute for as long as the agent has to be considered online.
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
     * @param PostConversationsMessagesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ConversationsMessage
     */
    public function sendAMessageAsAnAgent(PostConversationsMessagesRequest $request, ?array $options = null): ConversationsMessage;

    /**
     * @param string $id ID of the message
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ConversationsMessage
     */
    public function getAMessage(string $id, ?array $options = null): ConversationsMessage;

    /**
     * Only agents’ messages can be edited.
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
     * @return ConversationsMessage
     */
    public function updateAMessageSentByAnAgent(string $id, PutConversationsMessagesIdRequest $request, ?array $options = null): ConversationsMessage;

    /**
     * Only agents’ messages can be deleted.
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
     * Example of automated messages: order status, announce new features in your web app, etc.
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
     * @return ConversationsMessage
     */
    public function sendAnAutomatedMessageToAVisitor(PostConversationsPushedMessagesRequest $request, ?array $options = null): ConversationsMessage;

    /**
     * @param string $id ID of the message sent previously
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ConversationsMessage
     */
    public function getAnAutomatedMessage(string $id, ?array $options = null): ConversationsMessage;

    /**
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
     * @return ConversationsMessage
     */
    public function updateAnAutomatedMessage(string $id, PutConversationsPushedMessagesIdRequest $request, ?array $options = null): ConversationsMessage;

    /**
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
     * @return PutConversationsVisitorGroupResponse
     */
    public function setVisitorGroupAssignment(PutConversationsVisitorGroupRequest $request, ?array $options = null): PutConversationsVisitorGroupResponse;
}
