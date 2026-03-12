<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Balance\Requests\GetLoyaltyBalanceProgramsPidActiveBalanceRequest;
use Brevo\Balance\Requests\GetBalanceDefinitionListRequest;
use Brevo\Balance\Requests\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit;
use Brevo\Balance\Requests\GetBalanceDefinitionRequest;
use Brevo\Balance\Requests\UpdateBalanceDefinitionRequest;
use Brevo\Balance\Types\UpdateBalanceDefinitionRequestUnit;
use Brevo\Balance\Requests\CreateBalanceLimitRequest;
use Brevo\Balance\Types\CreateBalanceLimitRequestConstraintType;
use Brevo\Balance\Types\CreateBalanceLimitRequestDurationUnit;
use Brevo\Balance\Types\CreateBalanceLimitRequestTransactionType;
use Brevo\Balance\Requests\GetBalanceLimitRequest;
use Brevo\Balance\Requests\UpdateBalanceLimitRequest;
use Brevo\Balance\Types\UpdateBalanceLimitRequestConstraintType;
use Brevo\Balance\Types\UpdateBalanceLimitRequestDurationUnit;
use Brevo\Balance\Types\UpdateBalanceLimitRequestTransactionType;
use Brevo\Balance\Requests\CreateBalanceOrderRequest;
use Brevo\Balance\Requests\PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest;
use Brevo\Balance\Requests\GetLoyaltyBalanceProgramsPidTransactionHistoryRequest;
use Brevo\Balance\Requests\BeginTransactionRequest;

class BalanceWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetActiveBalancesApi(): void {
        $testId = 'balance.get_active_balances_api.0';
        $this->client->balance->getActiveBalancesApi(
            'pid',
            new GetLoyaltyBalanceProgramsPidActiveBalanceRequest([
                'contactId' => 1,
                'balanceDefinitionId' => 'balance_definition_id',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_active_balances_api.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/active-balance",
            ['contact_id' => '1', 'balance_definition_id' => 'balance_definition_id'],
            1
        );
    }

    /**
     */
    public function testGetBalanceDefinitionList(): void {
        $testId = 'balance.get_balance_definition_list.0';
        $this->client->balance->getBalanceDefinitionList(
            'pid',
            new GetBalanceDefinitionListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_balance_definition_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/balance-definitions",
            null,
            1
        );
    }

    /**
     */
    public function testCreateBalanceDefinition(): void {
        $testId = 'balance.create_balance_definition.0';
        $this->client->balance->createBalanceDefinition(
            'pid',
            new PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest([
                'name' => 'name',
                'unit' => PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit::Points->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.create_balance_definition.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/balance-definitions",
            null,
            1
        );
    }

    /**
     */
    public function testGetBalanceDefinition(): void {
        $testId = 'balance.get_balance_definition.0';
        $this->client->balance->getBalanceDefinition(
            'pid',
            'bdid',
            new GetBalanceDefinitionRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_balance_definition.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/balance-definitions/bdid",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateBalanceDefinition(): void {
        $testId = 'balance.update_balance_definition.0';
        $this->client->balance->updateBalanceDefinition(
            'pid',
            'bdid',
            new UpdateBalanceDefinitionRequest([
                'name' => 'name',
                'unit' => UpdateBalanceDefinitionRequestUnit::Points->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.update_balance_definition.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/loyalty/balance/programs/pid/balance-definitions/bdid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteBalanceDefinition(): void {
        $testId = 'balance.delete_balance_definition.0';
        $this->client->balance->deleteBalanceDefinition(
            'pid',
            'bdid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.delete_balance_definition.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/balance/programs/pid/balance-definitions/bdid",
            null,
            1
        );
    }

    /**
     */
    public function testCreateBalanceLimit(): void {
        $testId = 'balance.create_balance_limit.0';
        $this->client->balance->createBalanceLimit(
            'pid',
            'bdid',
            new CreateBalanceLimitRequest([
                'constraintType' => CreateBalanceLimitRequestConstraintType::Transaction->value,
                'durationUnit' => CreateBalanceLimitRequestDurationUnit::Day->value,
                'durationValue' => 1,
                'transactionType' => CreateBalanceLimitRequestTransactionType::Credit->value,
                'value' => 1,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.create_balance_limit.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/balance-definitions/bdid/limits",
            null,
            1
        );
    }

    /**
     */
    public function testGetBalanceLimit(): void {
        $testId = 'balance.get_balance_limit.0';
        $this->client->balance->getBalanceLimit(
            'pid',
            'bdid',
            'blid',
            new GetBalanceLimitRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_balance_limit.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/balance-definitions/bdid/limits/blid",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateBalanceLimit(): void {
        $testId = 'balance.update_balance_limit.0';
        $this->client->balance->updateBalanceLimit(
            'pid',
            'bdid',
            'blid',
            new UpdateBalanceLimitRequest([
                'constraintType' => UpdateBalanceLimitRequestConstraintType::Transaction->value,
                'durationUnit' => UpdateBalanceLimitRequestDurationUnit::Day->value,
                'durationValue' => 1,
                'transactionType' => UpdateBalanceLimitRequestTransactionType::Credit->value,
                'value' => 1,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.update_balance_limit.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/loyalty/balance/programs/pid/balance-definitions/bdid/limits/blid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteBalanceLimit(): void {
        $testId = 'balance.delete_balance_limit.0';
        $this->client->balance->deleteBalanceLimit(
            'pid',
            'bdid',
            'blid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.delete_balance_limit.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/balance/programs/pid/balance-definitions/bdid/limits/blid",
            null,
            1
        );
    }

    /**
     */
    public function testGetContactBalances(): void {
        $testId = 'balance.get_contact_balances.0';
        $this->client->balance->getContactBalances(
            'pid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_contact_balances.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/contact-balances",
            null,
            1
        );
    }

    /**
     */
    public function testCreateBalanceOrder(): void {
        $testId = 'balance.create_balance_order.0';
        $this->client->balance->createBalanceOrder(
            'pid',
            new CreateBalanceOrderRequest([
                'amount' => 1.1,
                'balanceDefinitionId' => 'balanceDefinitionId',
                'contactId' => 1,
                'dueAt' => 'dueAt',
                'source' => 'source',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.create_balance_order.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/create-order",
            null,
            1
        );
    }

    /**
     */
    public function testGetSubscriptionBalances(): void {
        $testId = 'balance.get_subscription_balances.0';
        $this->client->balance->getSubscriptionBalances(
            'pid',
            'cid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_subscription_balances.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/subscriptions/cid/balances",
            null,
            1
        );
    }

    /**
     */
    public function testCreateSubscriptionBalances(): void {
        $testId = 'balance.create_subscription_balances.0';
        $this->client->balance->createSubscriptionBalances(
            'pid',
            'cid',
            new PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest([
                'balanceDefinitionId' => 'balanceDefinitionId',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.create_subscription_balances.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/subscriptions/cid/balances",
            null,
            1
        );
    }

    /**
     */
    public function testGetTransactionHistoryApi(): void {
        $testId = 'balance.get_transaction_history_api.0';
        $this->client->balance->getTransactionHistoryApi(
            'pid',
            new GetLoyaltyBalanceProgramsPidTransactionHistoryRequest([
                'contactId' => 1,
                'balanceDefinitionId' => 'balance_definition_id',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.get_transaction_history_api.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/balance/programs/pid/transaction-history",
            ['contact_id' => '1', 'balance_definition_id' => 'balance_definition_id'],
            1
        );
    }

    /**
     */
    public function testBeginTransaction(): void {
        $testId = 'balance.begin_transaction.0';
        $this->client->balance->beginTransaction(
            'pid',
            new BeginTransactionRequest([
                'amount' => 1.1,
                'balanceDefinitionId' => 'balanceDefinitionId',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'balance.begin_transaction.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/transactions",
            null,
            1
        );
    }

    /**
     */
    public function testCancelTransaction(): void {
        $testId = 'balance.cancel_transaction.0';
        $this->client->balance->cancelTransaction(
            'pid',
            'tid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.cancel_transaction.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/transactions/tid/cancel",
            null,
            1
        );
    }

    /**
     */
    public function testCompleteTransaction(): void {
        $testId = 'balance.complete_transaction.0';
        $this->client->balance->completeTransaction(
            'pid',
            'tid',
            [
                'headers' => [
                    'X-Test-Id' => 'balance.complete_transaction.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/balance/programs/pid/transactions/tid/complete",
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
