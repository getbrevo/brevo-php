<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidOffersRequest;
use Brevo\Reward\Requests\CreateRewardRequest;
use Brevo\Reward\Requests\CreateVoucherRequest;
use Brevo\Reward\Requests\RedeemVoucherRequest;
use Brevo\Reward\Requests\RevokeVouchersRequest;
use Brevo\Reward\Requests\ValidateRewardRequest;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidRewardsRidRequest;
use Brevo\Reward\Requests\GetLoyaltyOfferProgramsPidVouchersRequest;

class RewardWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetCodeCount(): void {
        $testId = 'reward.get_code_count.0';
        $this->client->reward->getCodeCount(
            'pid',
            'cpid',
            [
                'headers' => [
                    'X-Test-Id' => 'reward.get_code_count.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/offer/programs/pid/code-pools/cpid/codes-count",
            null,
            1
        );
    }

    /**
     */
    public function testGetRewardPageApi(): void {
        $testId = 'reward.get_reward_page_api.0';
        $this->client->reward->getRewardPageApi(
            'pid',
            new GetLoyaltyOfferProgramsPidOffersRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.get_reward_page_api.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/offer/programs/pid/offers",
            null,
            1
        );
    }

    /**
     */
    public function testCreateReward(): void {
        $testId = 'reward.create_reward.0';
        $this->client->reward->createReward(
            'pid',
            new CreateRewardRequest([
                'name' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.create_reward.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/offer/programs/pid/offers",
            null,
            1
        );
    }

    /**
     */
    public function testCreateVoucher(): void {
        $testId = 'reward.create_voucher.0';
        $this->client->reward->createVoucher(
            'pid',
            new CreateVoucherRequest([
                'rewardId' => 'rewardId',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.create_voucher.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/offer/programs/pid/rewards/attribute",
            null,
            1
        );
    }

    /**
     */
    public function testRedeemVoucher(): void {
        $testId = 'reward.redeem_voucher.0';
        $this->client->reward->redeemVoucher(
            'pid',
            new RedeemVoucherRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.redeem_voucher.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/offer/programs/pid/rewards/redeem",
            null,
            1
        );
    }

    /**
     */
    public function testCompleteRedeemTransaction(): void {
        $testId = 'reward.complete_redeem_transaction.0';
        $this->client->reward->completeRedeemTransaction(
            'pid',
            'tid',
            [
                'headers' => [
                    'X-Test-Id' => 'reward.complete_redeem_transaction.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/offer/programs/pid/rewards/redeem/tid/complete",
            null,
            1
        );
    }

    /**
     */
    public function testRevokeVouchers(): void {
        $testId = 'reward.revoke_vouchers.0';
        $this->client->reward->revokeVouchers(
            'pid',
            new RevokeVouchersRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.revoke_vouchers.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/offer/programs/pid/rewards/revoke",
            null,
            1
        );
    }

    /**
     */
    public function testValidateReward(): void {
        $testId = 'reward.validate_reward.0';
        $this->client->reward->validateReward(
            'pid',
            new ValidateRewardRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.validate_reward.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/offer/programs/pid/rewards/validate",
            null,
            1
        );
    }

    /**
     */
    public function testGetRewardInformation(): void {
        $testId = 'reward.get_reward_information.0';
        $this->client->reward->getRewardInformation(
            'pid',
            'rid',
            new GetLoyaltyOfferProgramsPidRewardsRidRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.get_reward_information.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/offer/programs/pid/rewards/rid",
            null,
            1
        );
    }

    /**
     */
    public function testGetVoucherForAContact(): void {
        $testId = 'reward.get_voucher_for_a_contact.0';
        $this->client->reward->getVoucherForAContact(
            'pid',
            new GetLoyaltyOfferProgramsPidVouchersRequest([
                'contactId' => 1,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'reward.get_voucher_for_a_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/offer/programs/pid/vouchers",
            ['contactId' => '1'],
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
