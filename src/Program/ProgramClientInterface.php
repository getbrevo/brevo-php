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
     * @param GetLpListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetLpListResponse
     */
    public function getLpList(GetLpListRequest $request = new GetLpListRequest(), ?array $options = null): GetLpListResponse;

    /**
     * Creates loyalty program
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
     * @return LoyaltyProgram
     */
    public function createNewLp(CreateNewLpRequest $request, ?array $options = null): LoyaltyProgram;

    /**
     * Returns loyalty program
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
     * @return LoyaltyProgram
     */
    public function getLoyaltyProgramInfo(string $pid, ?array $options = null): LoyaltyProgram;

    /**
     * Updates loyalty program
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
     * @return LoyaltyProgram
     */
    public function updateLoyaltyProgram(string $pid, UpdateLoyaltyProgramRequest $request, ?array $options = null): LoyaltyProgram;

    /**
     * Deletes Loyalty Program
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
     * @return LoyaltyProgram
     */
    public function partiallyUpdateLoyaltyProgram(string $pid, PartiallyUpdateLoyaltyProgramRequest $request = new PartiallyUpdateLoyaltyProgramRequest(), ?array $options = null): LoyaltyProgram;

    /**
     * Get Information of balances, tiers, rewards and subscription members for a subscription
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
     * @return GetParameterSubscriptionInfoResponse
     */
    public function getParameterSubscriptionInfo(string $pid, GetParameterSubscriptionInfoRequest $request = new GetParameterSubscriptionInfoRequest(), ?array $options = null): GetParameterSubscriptionInfoResponse;

    /**
     * Publishes loyalty program
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
     * @return SubscribeMemberToASubscriptionResponse
     */
    public function subscribeMemberToASubscription(string $pid, SubscribeMemberToASubscriptionRequest $request, ?array $options = null): SubscribeMemberToASubscriptionResponse;

    /**
     * Deletes member from a subscription
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
     * @return SubscribeToLoyaltyProgramResponse
     */
    public function subscribeToLoyaltyProgram(string $pid, SubscribeToLoyaltyProgramRequest $request, ?array $options = null): SubscribeToLoyaltyProgramResponse;
}
