<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Conversations\Requests\PostConversationsAgentOnlinePingRequest;
use Brevo\Conversations\Requests\PostConversationsMessagesRequest;
use Brevo\Conversations\Requests\PutConversationsMessagesIdRequest;
use Brevo\Conversations\Requests\PostConversationsPushedMessagesRequest;
use Brevo\Conversations\Requests\PutConversationsPushedMessagesIdRequest;
use Brevo\Conversations\Requests\PutConversationsVisitorGroupRequest;

class ConversationsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testSetsAgentsStatusToOnlineFor23Minutes(): void {
        $testId = 'conversations.sets_agents_status_to_online_for23minutes.0';
        $this->client->conversations->setsAgentsStatusToOnlineFor23Minutes(
            new PostConversationsAgentOnlinePingRequest([
                'agentId' => "d9nKoegKSjmCtyK78",
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.sets_agents_status_to_online_for23minutes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/conversations/agentOnlinePing",
            null,
            1
        );
    }

    /**
     */
    public function testSendAMessageAsAnAgent(): void {
        $testId = 'conversations.send_a_message_as_an_agent.0';
        $this->client->conversations->sendAMessageAsAnAgent(
            new PostConversationsMessagesRequest([
                'agentId' => "d9nKoegKSjmCtyK78",
                'text' => "Hello! How can I help you?",
                'visitorId' => "kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg",
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.send_a_message_as_an_agent.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/conversations/messages",
            null,
            1
        );
    }

    /**
     */
    public function testGetAMessage(): void {
        $testId = 'conversations.get_a_message.0';
        $this->client->conversations->getAMessage(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.get_a_message.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/conversations/messages/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateAMessageSentByAnAgent(): void {
        $testId = 'conversations.update_a_message_sent_by_an_agent.0';
        $this->client->conversations->updateAMessageSentByAnAgent(
            'id',
            new PutConversationsMessagesIdRequest([
                'text' => 'Good morning! How can I help you?',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.update_a_message_sent_by_an_agent.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/conversations/messages/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAMessageSentByAnAgent(): void {
        $testId = 'conversations.delete_a_message_sent_by_an_agent.0';
        $this->client->conversations->deleteAMessageSentByAnAgent(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.delete_a_message_sent_by_an_agent.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/conversations/messages/id",
            null,
            1
        );
    }

    /**
     */
    public function testSendAnAutomatedMessageToAVisitor(): void {
        $testId = 'conversations.send_an_automated_message_to_a_visitor.0';
        $this->client->conversations->sendAnAutomatedMessageToAVisitor(
            new PostConversationsPushedMessagesRequest([
                'groupId' => "PjRBMhWGen6aRHjif",
                'text' => "Your order has shipped! Here’s your tracking number: 9114 5847 3325 9667 4328 88",
                'visitorId' => "kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg",
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.send_an_automated_message_to_a_visitor.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/conversations/pushedMessages",
            null,
            1
        );
    }

    /**
     */
    public function testGetAnAutomatedMessage(): void {
        $testId = 'conversations.get_an_automated_message.0';
        $this->client->conversations->getAnAutomatedMessage(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.get_an_automated_message.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/conversations/pushedMessages/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateAnAutomatedMessage(): void {
        $testId = 'conversations.update_an_automated_message.0';
        $this->client->conversations->updateAnAutomatedMessage(
            'id',
            new PutConversationsPushedMessagesIdRequest([
                'text' => 'Your order has shipped! Here’s your tracking number: 9114 5847 4668 7775 9233 54',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.update_an_automated_message.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/conversations/pushedMessages/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAnAutomatedMessage(): void {
        $testId = 'conversations.delete_an_automated_message.0';
        $this->client->conversations->deleteAnAutomatedMessage(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.delete_an_automated_message.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/conversations/pushedMessages/id",
            null,
            1
        );
    }

    /**
     */
    public function testSetVisitorGroupAssignment(): void {
        $testId = 'conversations.set_visitor_group_assignment.0';
        $this->client->conversations->setVisitorGroupAssignment(
            new PutConversationsVisitorGroupRequest([
                'groupId' => "PjRBMhWGen6aRHjif",
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'conversations.set_visitor_group_assignment.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/conversations/visitorGroup",
            null,
            1
        );
    }

    /**
     */
    protected function setUp(): void {
        parent::setUp();
        $this->client = new Brevo(
            apiKey: 'test-apiKey',
        options: [
            'baseUrl' => 'http://localhost:8080',
        ],
        );
    }
}
