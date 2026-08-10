<?php

namespace Brevo\Program;

use Brevo\Program\Requests\GetLpListRequest;
use Brevo\Program\Types\GetLpListResponse;
use Brevo\Program\Requests\CreateNewLpRequest;
use Brevo\Types\LoyaltyProgram;
use Brevo\Program\Requests\UpdateLoyaltyProgramRequest;
use Brevo\Program\Requests\PartiallyUpdateLoyaltyProgramRequest;
use Brevo\Program\Requests\GetParameterSubscriptionInfoRequest;
use Brevo\Program\Types\GetParameterSubscriptionInfoResponse;
use Brevo\Program\Requests\SubscribeMemberToASubscriptionRequest;
use Brevo\Program\Types\SubscribeMemberToASubscriptionResponse;
use Brevo\Program\Requests\DeleteContactMembersRequest;
use Brevo\Program\Requests\SubscribeToLoyaltyProgramRequest;
use Brevo\Program\Types\SubscribeToLoyaltyProgramResponse;

interface ProgramClientInterface
{
    /**
     * Returns list of loyalty programs
     *
     * Example:
     * ```php
     * $client->program->getLpList(
     *     new GetLpListRequest([]),
     * );
     * ```
     *
     * @param GetLpListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetLpListResponse
     */
    public function getLpList(GetLpListRequest $request = new GetLpListRequest(), ?array $options = null): ?GetLpListResponse;

    /**
     * Creates loyalty program
     *
     * Example:
     * ```php
     * $client->program->createNewLp(
     *     new CreateNewLpRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param CreateNewLpRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LoyaltyProgram
     */
    public function createNewLp(CreateNewLpRequest $request, ?array $options = null): ?LoyaltyProgram;

    /**
     * Returns loyalty program
     *
     * Example:
     * ```php
     * $client->program->getLoyaltyProgramInfo(
     *     'pid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LoyaltyProgram
     */
    public function getLoyaltyProgramInfo(string $pid, ?array $options = null): ?LoyaltyProgram;

    /**
     * Updates loyalty program
     *
     * Example:
     * ```php
     * $client->program->updateLoyaltyProgram(
     *     'pid',
     *     new UpdateLoyaltyProgramRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param UpdateLoyaltyProgramRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LoyaltyProgram
     */
    public function updateLoyaltyProgram(string $pid, UpdateLoyaltyProgramRequest $request, ?array $options = null): ?LoyaltyProgram;

    /**
     * Deletes Loyalty Program
     *
     * Example:
     * ```php
     * $client->program->deleteLoyaltyProgram(
     *     'pid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteLoyaltyProgram(string $pid, ?array $options = null): void;

    /**
     * Partially updates loyalty program
     *
     * Example:
     * ```php
     * $client->program->partiallyUpdateLoyaltyProgram(
     *     'pid',
     *     new PartiallyUpdateLoyaltyProgramRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param PartiallyUpdateLoyaltyProgramRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LoyaltyProgram
     */
    public function partiallyUpdateLoyaltyProgram(string $pid, PartiallyUpdateLoyaltyProgramRequest $request = new PartiallyUpdateLoyaltyProgramRequest(), ?array $options = null): ?LoyaltyProgram;

    /**
     * Get Information of balances, tiers, rewards and subscription members for a subscription
     *
     * Example:
     * ```php
     * $client->program->getParameterSubscriptionInfo(
     *     'pid',
     *     new GetParameterSubscriptionInfoRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param GetParameterSubscriptionInfoRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetParameterSubscriptionInfoResponse
     */
    public function getParameterSubscriptionInfo(string $pid, GetParameterSubscriptionInfoRequest $request = new GetParameterSubscriptionInfoRequest(), ?array $options = null): ?GetParameterSubscriptionInfoResponse;

    /**
     * Delete subscription for a contact
     *
     * Example:
     * ```php
     * $client->program->deleteContactSubscription(
     *     'pid',
     *     1,
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param int $cid Contact ID.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteContactSubscription(string $pid, int $cid, ?array $options = null): void;

    /**
     * Publishes loyalty program
     *
     * Example:
     * ```php
     * $client->program->publishLoyaltyProgram(
     *     'pid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function publishLoyaltyProgram(string $pid, ?array $options = null): void;

    /**
     * Add member to a subscription
     *
     * Example:
     * ```php
     * $client->program->subscribeMemberToASubscription(
     *     'pid',
     *     new SubscribeMemberToASubscriptionRequest([
     *         'memberContactIds' => [
     *             1,
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param SubscribeMemberToASubscriptionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubscribeMemberToASubscriptionResponse
     */
    public function subscribeMemberToASubscription(string $pid, SubscribeMemberToASubscriptionRequest $request, ?array $options = null): ?SubscribeMemberToASubscriptionResponse;

    /**
     * Deletes member from a subscription
     *
     * Example:
     * ```php
     * $client->program->deleteContactMembers(
     *     'pid',
     *     new DeleteContactMembersRequest([
     *         'memberContactIds' => 'memberContactIds',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param DeleteContactMembersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteContactMembers(string $pid, DeleteContactMembersRequest $request, ?array $options = null): void;

    /**
     * Subscribes to a loyalty program
     *
     * Example:
     * ```php
     * $client->program->subscribeToLoyaltyProgram(
     *     'pid',
     *     new SubscribeToLoyaltyProgramRequest([
     *         'contactId' => 1000000,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID. A unique identifier for the loyalty program.
     * @param SubscribeToLoyaltyProgramRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubscribeToLoyaltyProgramResponse
     */
    public function subscribeToLoyaltyProgram(string $pid, SubscribeToLoyaltyProgramRequest $request, ?array $options = null): ?SubscribeToLoyaltyProgramResponse;
}
