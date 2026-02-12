<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Tier\Requests\GetListOfTierGroupsRequest;
use Brevo\Tier\Requests\CreateTierGroupRequest;
use Brevo\Tier\Requests\GetTierGroupRequest;
use Brevo\Tier\Requests\UpdateTierGroupRequest;
use Brevo\Tier\Types\UpdateTierGroupRequestDowngradeStrategy;
use Brevo\Tier\Types\UpdateTierGroupRequestUpgradeStrategy;
use Brevo\Tier\Requests\CreateTierForTierGroupRequest;
use Brevo\Tier\Types\CreateTierForTierGroupRequestAccessConditionsItem;
use Brevo\Tier\Requests\GetLoyaltyProgramTierRequest;
use Brevo\Tier\Requests\UpdateTierRequest;
use Brevo\Tier\Types\UpdateTierRequestAccessConditionsItem;
use Brevo\Tier\Types\UpdateTierRequestTierRewardsItem;

class TierWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testAddSubscriptionToTier(): void {
        $testId = 'tier.add_subscription_to_tier.0';
        $this->client->tier->addSubscriptionToTier(
            'pid',
            'cid',
            'tid',
            [
                'headers' => [
                    'X-Test-Id' => 'tier.add_subscription_to_tier.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/tier/programs/pid/contacts/cid/tiers/tid",
            null,
            1
        );
    }

    /**
     */
    public function testGetListOfTierGroups(): void {
        $testId = 'tier.get_list_of_tier_groups.0';
        $this->client->tier->getListOfTierGroups(
            'pid',
            new GetListOfTierGroupsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.get_list_of_tier_groups.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/tier/programs/pid/tier-groups",
            null,
            1
        );
    }

    /**
     */
    public function testCreateTierGroup(): void {
        $testId = 'tier.create_tier_group.0';
        $this->client->tier->createTierGroup(
            'pid',
            new CreateTierGroupRequest([
                'name' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.create_tier_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/tier/programs/pid/tier-groups",
            null,
            1
        );
    }

    /**
     */
    public function testGetTierGroup(): void {
        $testId = 'tier.get_tier_group.0';
        $this->client->tier->getTierGroup(
            'pid',
            'gid',
            new GetTierGroupRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.get_tier_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/tier/programs/pid/tier-groups/gid",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateTierGroup(): void {
        $testId = 'tier.update_tier_group.0';
        $this->client->tier->updateTierGroup(
            'pid',
            'gid',
            new UpdateTierGroupRequest([
                'downgradeStrategy' => UpdateTierGroupRequestDowngradeStrategy::RealTime->value,
                'name' => 'name',
                'tierOrder' => [
                    'tierOrder',
                ],
                'upgradeStrategy' => UpdateTierGroupRequestUpgradeStrategy::RealTime->value,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.update_tier_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/loyalty/tier/programs/pid/tier-groups/gid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteTierGroup(): void {
        $testId = 'tier.delete_tier_group.0';
        $this->client->tier->deleteTierGroup(
            'pid',
            'gid',
            [
                'headers' => [
                    'X-Test-Id' => 'tier.delete_tier_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/tier/programs/pid/tier-groups/gid",
            null,
            1
        );
    }

    /**
     */
    public function testCreateTierForTierGroup(): void {
        $testId = 'tier.create_tier_for_tier_group.0';
        $this->client->tier->createTierForTierGroup(
            'pid',
            'gid',
            new CreateTierForTierGroupRequest([
                'accessConditions' => [
                    new CreateTierForTierGroupRequestAccessConditionsItem([]),
                ],
                'name' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.create_tier_for_tier_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/tier/programs/pid/tier-groups/gid/tiers",
            null,
            1
        );
    }

    /**
     */
    public function testGetLoyaltyProgramTier(): void {
        $testId = 'tier.get_loyalty_program_tier.0';
        $this->client->tier->getLoyaltyProgramTier(
            'pid',
            new GetLoyaltyProgramTierRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.get_loyalty_program_tier.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/tier/programs/pid/tiers",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateTier(): void {
        $testId = 'tier.update_tier.0';
        $this->client->tier->updateTier(
            'pid',
            'tid',
            new UpdateTierRequest([
                'accessConditions' => [
                    new UpdateTierRequestAccessConditionsItem([]),
                ],
                'name' => 'name',
                'tierRewards' => [
                    new UpdateTierRequestTierRewardsItem([]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tier.update_tier.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/loyalty/tier/programs/pid/tiers/tid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteTier(): void {
        $testId = 'tier.delete_tier.0';
        $this->client->tier->deleteTier(
            'pid',
            'tid',
            [
                'headers' => [
                    'X-Test-Id' => 'tier.delete_tier.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/tier/programs/pid/tiers/tid",
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
