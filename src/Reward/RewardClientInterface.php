<?php

namespace Brevo\Reward;

use Brevo\Reward\Types\GetCodeCountResponse;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidOffersRequest;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidOffersResponse;
use Brevo\Reward\Requests\CreateRewardRequest;
use Brevo\Reward\Types\CreateRewardResponse;
use Brevo\Reward\Requests\CreateVoucherRequest;
use Brevo\Reward\Types\CreateVoucherResponse;
use Brevo\Reward\Requests\RedeemVoucherRequest;
use Brevo\Types\Redeem;
use Brevo\Reward\Requests\RevokeVouchersRequest;
use Brevo\Reward\Requests\ValidateRewardRequest;
use Brevo\Reward\Types\ValidateRewardResponse;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidRewardsRidRequest;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidRewardsRidResponse;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidVouchersRequest;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidVouchersResponse;

interface RewardClientInterface
{
    /**
     * Get code count
     *
     * @param string $pid Loyalty Program ID
     * @param string $cpid Code Pool ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCodeCountResponse
     */
    public function getCodeCount(string $pid, string $cpid, ?array $options = null): GetCodeCountResponse;

    /**
     * Returns a reward page
     *
     * @param string $pid Loyalty Program ID
     * @param GetLoyaltyOfferProgramsPidOffersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetLoyaltyOfferProgramsPidOffersResponse
     */
    public function getRewardPageApi(string $pid, GetLoyaltyOfferProgramsPidOffersRequest $request = new GetLoyaltyOfferProgramsPidOffersRequest(), ?array $options = null): GetLoyaltyOfferProgramsPidOffersResponse;

    /**
     * Creates a new reward in the loyalty program.
     *
     * @param string $pid Loyalty Program ID
     * @param CreateRewardRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateRewardResponse
     */
    public function createReward(string $pid, CreateRewardRequest $request, ?array $options = null): CreateRewardResponse;

    /**
     * Create a voucher and attribute it to a specific membership.
     *
     * @param string $pid Loyalty Program ID
     * @param CreateVoucherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateVoucherResponse
     */
    public function createVoucher(string $pid, CreateVoucherRequest $request, ?array $options = null): CreateVoucherResponse;

    /**
     * Creates a request to redeem a voucher.
     *
     * @param string $pid Loyalty Program ID
     * @param RedeemVoucherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Redeem
     */
    public function redeemVoucher(string $pid, RedeemVoucherRequest $request = new RedeemVoucherRequest(), ?array $options = null): Redeem;

    /**
     * Completes voucher redeem request.
     *
     * @param string $pid Loyalty Program ID
     * @param string $tid Redeem transaction ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Redeem
     */
    public function completeRedeemTransaction(string $pid, string $tid, ?array $options = null): Redeem;

    /**
     * Revoke attributed vouchers.
     *
     * @param string $pid Loyalty Program ID
     * @param RevokeVouchersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function revokeVouchers(string $pid, RevokeVouchersRequest $request = new RevokeVouchersRequest(), ?array $options = null): void;

    /**
     * Validates a reward.
     *
     * @param string $pid Loyalty Program ID
     * @param ValidateRewardRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ValidateRewardResponse
     */
    public function validateReward(string $pid, ValidateRewardRequest $request = new ValidateRewardRequest(), ?array $options = null): ValidateRewardResponse;

    /**
     * Returns reward information.
     *
     * @param string $pid Loyalty Program ID
     * @param string $rid Reward ID
     * @param GetLoyaltyOfferProgramsPidRewardsRidRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetLoyaltyOfferProgramsPidRewardsRidResponse
     */
    public function getRewardInformation(string $pid, string $rid, GetLoyaltyOfferProgramsPidRewardsRidRequest $request = new GetLoyaltyOfferProgramsPidRewardsRidRequest(), ?array $options = null): GetLoyaltyOfferProgramsPidRewardsRidResponse;

    /**
     * Get voucher for a contact
     *
     * @param string $pid Loyalty Program ID
     * @param GetLoyaltyOfferProgramsPidVouchersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetLoyaltyOfferProgramsPidVouchersResponse
     */
    public function getVoucherForAContact(string $pid, GetLoyaltyOfferProgramsPidVouchersRequest $request, ?array $options = null): GetLoyaltyOfferProgramsPidVouchersResponse;
}
