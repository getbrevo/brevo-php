<?php

namespace Brevo\Balance;

use Brevo\Balance\Requests\GetLoyaltyBalanceProgramsPidActiveBalanceRequest;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidActiveBalanceResponse;
use Brevo\Balance\Requests\GetBalanceDefinitionListRequest;
use Brevo\Balance\Types\GetBalanceDefinitionListResponse;
use Brevo\Balance\Requests\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest;
use Brevo\Types\BalanceDefinition;
use Brevo\Balance\Requests\GetBalanceDefinitionRequest;
use Brevo\Balance\Requests\UpdateBalanceDefinitionRequest;
use Brevo\Balance\Requests\CreateBalanceLimitRequest;
use Brevo\Types\BalanceLimit;
use Brevo\Balance\Requests\GetBalanceLimitRequest;
use Brevo\Balance\Requests\UpdateBalanceLimitRequest;
use Brevo\Balance\Requests\GetContactBalancesRequest;
use Brevo\Balance\Types\GetContactBalancesResponse;
use Brevo\Balance\Requests\CreateBalanceOrderRequest;
use Brevo\Balance\Types\CreateBalanceOrderResponse;
use Brevo\Balance\Requests\GetSubscriptionBalancesRequest;
use Brevo\Balance\Types\GetSubscriptionBalancesResponse;
use Brevo\Balance\Requests\PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest;
use Brevo\Balance\Types\PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse;
use Brevo\Balance\Requests\GetLoyaltyBalanceProgramsPidTransactionHistoryRequest;
use Brevo\Balance\Types\GetLoyaltyBalanceProgramsPidTransactionHistoryResponse;
use Brevo\Balance\Requests\BeginTransactionRequest;
use Brevo\Types\Transaction;

interface BalanceClientInterface
{
    /**
     * Returns Active Balances
     *
     * Example:
     * ```php
     * $client->balance->getActiveBalancesApi(
     *     'pid',
     *     new GetLoyaltyBalanceProgramsPidActiveBalanceRequest([
     *         'contactId' => 1000000,
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param GetLoyaltyBalanceProgramsPidActiveBalanceRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetLoyaltyBalanceProgramsPidActiveBalanceResponse
     */
    public function getActiveBalancesApi(string $pid, GetLoyaltyBalanceProgramsPidActiveBalanceRequest $request, ?array $options = null): ?GetLoyaltyBalanceProgramsPidActiveBalanceResponse;

    /**
     * Returns balance definition page
     *
     * Example:
     * ```php
     * $client->balance->getBalanceDefinitionList(
     *     'pid',
     *     new GetBalanceDefinitionListRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param GetBalanceDefinitionListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetBalanceDefinitionListResponse
     */
    public function getBalanceDefinitionList(string $pid, GetBalanceDefinitionListRequest $request = new GetBalanceDefinitionListRequest(), ?array $options = null): ?GetBalanceDefinitionListResponse;

    /**
     * Creates balance definition and returns information
     *
     * Example:
     * ```php
     * $client->balance->createBalanceDefinition(
     *     'pid',
     *     new PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest([
     *         'name' => 'name',
     *         'unit' => PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit::Points->value,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceDefinition
     */
    public function createBalanceDefinition(string $pid, PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest $request, ?array $options = null): ?BalanceDefinition;

    /**
     * Returns balance definition
     *
     * Example:
     * ```php
     * $client->balance->getBalanceDefinition(
     *     'pid',
     *     'bdid',
     *     new GetBalanceDefinitionRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param GetBalanceDefinitionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceDefinition
     */
    public function getBalanceDefinition(string $pid, string $bdid, GetBalanceDefinitionRequest $request = new GetBalanceDefinitionRequest(), ?array $options = null): ?BalanceDefinition;

    /**
     * Updates Balance definition
     *
     * Example:
     * ```php
     * $client->balance->updateBalanceDefinition(
     *     'pid',
     *     'bdid',
     *     new UpdateBalanceDefinitionRequest([
     *         'name' => 'name',
     *         'unit' => UpdateBalanceDefinitionRequestUnit::Points->value,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param UpdateBalanceDefinitionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceDefinition
     */
    public function updateBalanceDefinition(string $pid, string $bdid, UpdateBalanceDefinitionRequest $request, ?array $options = null): ?BalanceDefinition;

    /**
     * Delete Balance definition
     *
     * Example:
     * ```php
     * $client->balance->deleteBalanceDefinition(
     *     'pid',
     *     'bdid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteBalanceDefinition(string $pid, string $bdid, ?array $options = null): void;

    /**
     * Creates balance limit and sends the created UUID along with the data
     *
     * Example:
     * ```php
     * $client->balance->createBalanceLimit(
     *     'pid',
     *     'bdid',
     *     new CreateBalanceLimitRequest([
     *         'constraintType' => CreateBalanceLimitRequestConstraintType::Transaction->value,
     *         'durationUnit' => CreateBalanceLimitRequestDurationUnit::Day->value,
     *         'durationValue' => 1,
     *         'transactionType' => CreateBalanceLimitRequestTransactionType::Credit->value,
     *         'value' => 1,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param CreateBalanceLimitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceLimit
     */
    public function createBalanceLimit(string $pid, string $bdid, CreateBalanceLimitRequest $request, ?array $options = null): ?BalanceLimit;

    /**
     * Fetches balance limits and send the created UUID along with the data
     *
     * Example:
     * ```php
     * $client->balance->getBalanceLimit(
     *     'pid',
     *     'bdid',
     *     'blid',
     *     new GetBalanceLimitRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param string $blid Balance Limit Id
     * @param GetBalanceLimitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceLimit
     */
    public function getBalanceLimit(string $pid, string $bdid, string $blid, GetBalanceLimitRequest $request = new GetBalanceLimitRequest(), ?array $options = null): ?BalanceLimit;

    /**
     * Updates balance limit
     *
     * Example:
     * ```php
     * $client->balance->updateBalanceLimit(
     *     'pid',
     *     'bdid',
     *     'blid',
     *     new UpdateBalanceLimitRequest([
     *         'constraintType' => UpdateBalanceLimitRequestConstraintType::Transaction->value,
     *         'durationUnit' => UpdateBalanceLimitRequestDurationUnit::Day->value,
     *         'durationValue' => 1,
     *         'transactionType' => UpdateBalanceLimitRequestTransactionType::Credit->value,
     *         'value' => 1,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param string $blid Balance Limit Id
     * @param UpdateBalanceLimitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BalanceLimit
     */
    public function updateBalanceLimit(string $pid, string $bdid, string $blid, UpdateBalanceLimitRequest $request, ?array $options = null): ?BalanceLimit;

    /**
     * Delete balance limit
     *
     * Example:
     * ```php
     * $client->balance->deleteBalanceLimit(
     *     'pid',
     *     'bdid',
     *     'blid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $bdid Balance Definition Id
     * @param string $blid Balance Limit Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteBalanceLimit(string $pid, string $bdid, string $blid, ?array $options = null): void;

    /**
     * Returns contact balances for a given balance definition across all subscriptions.
     *
     * Example:
     * ```php
     * $client->balance->getContactBalances(
     *     'pid',
     *     new GetContactBalancesRequest([
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param GetContactBalancesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetContactBalancesResponse
     */
    public function getContactBalances(string $pid, GetContactBalancesRequest $request, ?array $options = null): ?GetContactBalancesResponse;

    /**
     * Returns created order
     *
     * Example:
     * ```php
     * $client->balance->createBalanceOrder(
     *     'pid',
     *     new CreateBalanceOrderRequest([
     *         'amount' => 1.1,
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *         'contactId' => 1,
     *         'dueAt' => 'dueAt',
     *         'source' => CreateBalanceOrderRequestSource::Engine->value,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param CreateBalanceOrderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateBalanceOrderResponse
     */
    public function createBalanceOrder(string $pid, CreateBalanceOrderRequest $request, ?array $options = null): ?CreateBalanceOrderResponse;

    /**
     * Returns subscription balances
     *
     * Example:
     * ```php
     * $client->balance->getSubscriptionBalances(
     *     'pid',
     *     'cid',
     *     new GetSubscriptionBalancesRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $cid Contact Id
     * @param GetSubscriptionBalancesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSubscriptionBalancesResponse
     */
    public function getSubscriptionBalances(string $pid, string $cid, GetSubscriptionBalancesRequest $request = new GetSubscriptionBalancesRequest(), ?array $options = null): ?GetSubscriptionBalancesResponse;

    /**
     * Creates a balance for a contact
     *
     * Example:
     * ```php
     * $client->balance->createSubscriptionBalances(
     *     'pid',
     *     'cid',
     *     new PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest([
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $cid Contact Id
     * @param PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse
     */
    public function createSubscriptionBalances(string $pid, string $cid, PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest $request, ?array $options = null): ?PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse;

    /**
     * Returns transaction history
     *
     * Example:
     * ```php
     * $client->balance->getTransactionHistoryApi(
     *     'pid',
     *     new GetLoyaltyBalanceProgramsPidTransactionHistoryRequest([
     *         'contactId' => 1000000,
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param GetLoyaltyBalanceProgramsPidTransactionHistoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetLoyaltyBalanceProgramsPidTransactionHistoryResponse
     */
    public function getTransactionHistoryApi(string $pid, GetLoyaltyBalanceProgramsPidTransactionHistoryRequest $request, ?array $options = null): ?GetLoyaltyBalanceProgramsPidTransactionHistoryResponse;

    /**
     * Creates new transaction and returns information
     *
     * Example:
     * ```php
     * $client->balance->beginTransaction(
     *     'pid',
     *     new BeginTransactionRequest([
     *         'amount' => 1.1,
     *         'balanceDefinitionId' => 'balanceDefinitionId',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param BeginTransactionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Transaction
     */
    public function beginTransaction(string $pid, BeginTransactionRequest $request, ?array $options = null): ?Transaction;

    /**
     * Cancels transaction
     *
     * Example:
     * ```php
     * $client->balance->cancelTransaction(
     *     'pid',
     *     'tid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $tid Transaction Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Transaction
     */
    public function cancelTransaction(string $pid, string $tid, ?array $options = null): ?Transaction;

    /**
     * Completes transaction
     *
     * Example:
     * ```php
     * $client->balance->completeTransaction(
     *     'pid',
     *     'tid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program Id
     * @param string $tid Transaction Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Transaction
     */
    public function completeTransaction(string $pid, string $tid, ?array $options = null): ?Transaction;
}
