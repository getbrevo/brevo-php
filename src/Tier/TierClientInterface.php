<?php

namespace Brevo\Tier;

use Brevo\Tier\Types\AddSubscriptionToTierResponse;
use Brevo\Tier\Requests\GetListOfTierGroupsRequest;
use Brevo\Tier\Types\GetListOfTierGroupsResponse;
use Brevo\Tier\Requests\CreateTierGroupRequest;
use Brevo\Types\TierGroup;
use Brevo\Tier\Requests\GetTierGroupRequest;
use Brevo\Tier\Requests\UpdateTierGroupRequest;
use Brevo\Tier\Requests\CreateTierForTierGroupRequest;
use Brevo\Types\Tier;
use Brevo\Tier\Requests\GetLoyaltyProgramTierRequest;
use Brevo\Tier\Types\GetLoyaltyProgramTierResponse;
use Brevo\Tier\Requests\UpdateTierRequest;

interface TierClientInterface
{
    /**
     * Manually assigns a tier to a specific membership.
     *
     * Example:
     * ```php
     * $client->tier->addSubscriptionToTier(
     *     'pid',
     *     'cid',
     *     'tid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $cid Contact ID
     * @param string $tid Tier ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AddSubscriptionToTierResponse
     */
    public function addSubscriptionToTier(string $pid, string $cid, string $tid, ?array $options = null): ?AddSubscriptionToTierResponse;

    /**
     * Returns the list of tier groups defined within the loyalty program.
     *
     * Example:
     * ```php
     * $client->tier->getListOfTierGroups(
     *     'pid',
     *     new GetListOfTierGroupsRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param GetListOfTierGroupsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetListOfTierGroupsResponse
     */
    public function getListOfTierGroups(string $pid, GetListOfTierGroupsRequest $request = new GetListOfTierGroupsRequest(), ?array $options = null): ?GetListOfTierGroupsResponse;

    /**
     * Creates a new tier group in a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->createTierGroup(
     *     'pid',
     *     new CreateTierGroupRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param CreateTierGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TierGroup
     */
    public function createTierGroup(string $pid, CreateTierGroupRequest $request, ?array $options = null): ?TierGroup;

    /**
     * Returns tier group information.
     *
     * Example:
     * ```php
     * $client->tier->getTierGroup(
     *     'pid',
     *     'gid',
     *     new GetTierGroupRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $gid Tier group ID
     * @param GetTierGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TierGroup
     */
    public function getTierGroup(string $pid, string $gid, GetTierGroupRequest $request = new GetTierGroupRequest(), ?array $options = null): ?TierGroup;

    /**
     * Updates a tier group from a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->updateTierGroup(
     *     'pid',
     *     'gid',
     *     new UpdateTierGroupRequest([
     *         'downgradeStrategy' => UpdateTierGroupRequestDowngradeStrategy::RealTime->value,
     *         'name' => 'name',
     *         'tierOrder' => [
     *             'tierOrder',
     *         ],
     *         'upgradeStrategy' => UpdateTierGroupRequestUpgradeStrategy::RealTime->value,
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $gid Tier group ID
     * @param UpdateTierGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TierGroup
     */
    public function updateTierGroup(string $pid, string $gid, UpdateTierGroupRequest $request, ?array $options = null): ?TierGroup;

    /**
     * Deletes a tier group from a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->deleteTierGroup(
     *     'pid',
     *     'gid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $gid Tier group ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteTierGroup(string $pid, string $gid, ?array $options = null): void;

    /**
     * Creates a new tier in a loyalty program tier group. *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->createTierForTierGroup(
     *     'pid',
     *     'gid',
     *     new CreateTierForTierGroupRequest([
     *         'accessConditions' => [
     *             new CreateTierForTierGroupRequestAccessConditionsItem([]),
     *         ],
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $gid Tier group ID
     * @param CreateTierForTierGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Tier
     */
    public function createTierForTierGroup(string $pid, string $gid, CreateTierForTierGroupRequest $request, ?array $options = null): ?Tier;

    /**
     * Returns the list of tiers defined within the loyalty program.
     *
     * Example:
     * ```php
     * $client->tier->getLoyaltyProgramTier(
     *     'pid',
     *     new GetLoyaltyProgramTierRequest([]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param GetLoyaltyProgramTierRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetLoyaltyProgramTierResponse
     */
    public function getLoyaltyProgramTier(string $pid, GetLoyaltyProgramTierRequest $request = new GetLoyaltyProgramTierRequest(), ?array $options = null): ?GetLoyaltyProgramTierResponse;

    /**
     * Modifies an existing tier for the specified tier group *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->updateTier(
     *     'pid',
     *     'tid',
     *     new UpdateTierRequest([
     *         'accessConditions' => [
     *             new UpdateTierRequestAccessConditionsItem([]),
     *         ],
     *         'name' => 'name',
     *         'tierRewards' => [
     *             new UpdateTierRequestTierRewardsItem([]),
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $tid Tier ID
     * @param UpdateTierRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Tier
     */
    public function updateTier(string $pid, string $tid, UpdateTierRequest $request, ?array $options = null): ?Tier;

    /**
     * Deletes a tier from a loyalty program tier group. *(The changes will take effect with the next publication of the loyalty program)*
     *
     * Example:
     * ```php
     * $client->tier->deleteTier(
     *     'pid',
     *     'tid',
     * );
     * ```
     *
     * @param string $pid Loyalty Program ID
     * @param string $tid Tier ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteTier(string $pid, string $tid, ?array $options = null): void;
}
