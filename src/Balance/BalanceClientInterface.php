<?php

namespace Brevo\Balance;

use Brevo\Balance\Requests\GetLoyaltyBalanceProgramsPidActiveBalanceRequest;
use Brevo\Types\BalanceLimit;
use Brevo\Balance\Requests\GetBalanceDefinitionListRequest;
use Brevo\Balance\Types\GetBalanceDefinitionListResponse;
use Brevo\Balance\Requests\PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest;
use Brevo\Types\BalanceDefinition;
use Brevo\Balance\Requests\GetBalanceDefinitionRequest;
use Brevo\Balance\Requests\UpdateBalanceDefinitionRequest;
use Brevo\Balance\Requests\CreateBalanceLimitRequest;
use Brevo\Balance\Requests\GetBalanceLimitRequest;
use Brevo\Balance\Requests\UpdateBalanceLimitRequest;
use Brevo\Balance\Types\GetContactBalancesResponse;
use Brevo\Balance\Requests\CreateBalanceOrderRequest;
use Brevo\Balance\Types\CreateBalanceOrderResponse;
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
     * @return BalanceLimit
     */
    public function getActiveBalancesApi(string $pid, GetLoyaltyBalanceProgramsPidActiveBalanceRequest $request, ?array $options = null): BalanceLimit;

    /**
     * Returns balance definition page
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
     * @return GetBalanceDefinitionListResponse
     */
    public function getBalanceDefinitionList(string $pid, GetBalanceDefinitionListRequest $request = new GetBalanceDefinitionListRequest(), ?array $options = null): GetBalanceDefinitionListResponse;

    /**
     * Creates balance definition and returns information
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
     * @return BalanceDefinition
     */
    public function createBalanceDefinition(string $pid, PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest $request, ?array $options = null): BalanceDefinition;

    /**
     * Returns balance definition
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
     * @return BalanceDefinition
     */
    public function getBalanceDefinition(string $pid, string $bdid, GetBalanceDefinitionRequest $request = new GetBalanceDefinitionRequest(), ?array $options = null): BalanceDefinition;

    /**
     * Updates Balance definition
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
     * @return BalanceDefinition
     */
    public function updateBalanceDefinition(string $pid, string $bdid, UpdateBalanceDefinitionRequest $request, ?array $options = null): BalanceDefinition;

    /**
     * Delete Balance definition
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
     * @return BalanceLimit
     */
    public function createBalanceLimit(string $pid, string $bdid, CreateBalanceLimitRequest $request, ?array $options = null): BalanceLimit;

    /**
     * Fetches balance limits and send the created UUID along with the data
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
     * @return BalanceLimit
     */
    public function getBalanceLimit(string $pid, string $bdid, string $blid, GetBalanceLimitRequest $request = new GetBalanceLimitRequest(), ?array $options = null): BalanceLimit;

    /**
     * Updates balance limit
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
     * @return BalanceLimit
     */
    public function updateBalanceLimit(string $pid, string $bdid, string $blid, UpdateBalanceLimitRequest $request, ?array $options = null): BalanceLimit;

    /**
     * Delete balance limit
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
     * Returns balance list
     *
     * @param string $pid Loyalty Program Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetContactBalancesResponse
     */
    public function getContactBalances(string $pid, ?array $options = null): GetContactBalancesResponse;

    /**
     * Returns created order
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
     * @return CreateBalanceOrderResponse
     */
    public function createBalanceOrder(string $pid, CreateBalanceOrderRequest $request, ?array $options = null): CreateBalanceOrderResponse;

    /**
     * Returns subscription balances
     *
     * @param string $pid Loyalty Program Id
     * @param string $cid Contact Id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSubscriptionBalancesResponse
     */
    public function getSubscriptionBalances(string $pid, string $cid, ?array $options = null): GetSubscriptionBalancesResponse;

    /**
     * Creates a balance for a contact
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
     * @return PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse
     */
    public function createSubscriptionBalances(string $pid, string $cid, PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest $request, ?array $options = null): PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse;

    /**
     * Returns transaction history
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
     * @return GetLoyaltyBalanceProgramsPidTransactionHistoryResponse
     */
    public function getTransactionHistoryApi(string $pid, GetLoyaltyBalanceProgramsPidTransactionHistoryRequest $request, ?array $options = null): GetLoyaltyBalanceProgramsPidTransactionHistoryResponse;

    /**
     * Creates new transaction and returns information
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
     * @return Transaction
     */
    public function beginTransaction(string $pid, BeginTransactionRequest $request, ?array $options = null): Transaction;

    /**
     * Cancels transaction
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
     * @return Transaction
     */
    public function cancelTransaction(string $pid, string $tid, ?array $options = null): Transaction;

    /**
     * Completes transaction
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
     * @return Transaction
     */
    public function completeTransaction(string $pid, string $tid, ?array $options = null): Transaction;
}
