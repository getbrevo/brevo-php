<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Program\Requests\GetLpListRequest;
use Brevo\Program\Requests\CreateNewLpRequest;
use Brevo\Program\Requests\UpdateLoyaltyProgramRequest;
use Brevo\Program\Requests\PartiallyUpdateLoyaltyProgramRequest;
use Brevo\Program\Requests\GetParameterSubscriptionInfoRequest;
use Brevo\Program\Requests\SubscribeMemberToASubscriptionRequest;
use Brevo\Program\Requests\DeleteContactMembersRequest;
use Brevo\Program\Requests\SubscribeToLoyaltyProgramRequest;

class ProgramWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetLpList(): void {
        $testId = 'program.get_lp_list.0';
        $this->client->program->getLpList(
            new GetLpListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.get_lp_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/config/programs",
            null,
            1
        );
    }

    /**
     */
    public function testCreateNewLp(): void {
        $testId = 'program.create_new_lp.0';
        $this->client->program->createNewLp(
            new CreateNewLpRequest([
                'name' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.create_new_lp.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/config/programs",
            null,
            1
        );
    }

    /**
     */
    public function testGetLoyaltyProgramInfo(): void {
        $testId = 'program.get_loyalty_program_info.0';
        $this->client->program->getLoyaltyProgramInfo(
            'pid',
            [
                'headers' => [
                    'X-Test-Id' => 'program.get_loyalty_program_info.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/config/programs/pid",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateLoyaltyProgram(): void {
        $testId = 'program.update_loyalty_program.0';
        $this->client->program->updateLoyaltyProgram(
            'pid',
            new UpdateLoyaltyProgramRequest([
                'name' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.update_loyalty_program.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/loyalty/config/programs/pid",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteLoyaltyProgram(): void {
        $testId = 'program.delete_loyalty_program.0';
        $this->client->program->deleteLoyaltyProgram(
            'pid',
            [
                'headers' => [
                    'X-Test-Id' => 'program.delete_loyalty_program.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/config/programs/pid",
            null,
            1
        );
    }

    /**
     */
    public function testPartiallyUpdateLoyaltyProgram(): void {
        $testId = 'program.partially_update_loyalty_program.0';
        $this->client->program->partiallyUpdateLoyaltyProgram(
            'pid',
            new PartiallyUpdateLoyaltyProgramRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.partially_update_loyalty_program.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/loyalty/config/programs/pid",
            null,
            1
        );
    }

    /**
     */
    public function testGetParameterSubscriptionInfo(): void {
        $testId = 'program.get_parameter_subscription_info.0';
        $this->client->program->getParameterSubscriptionInfo(
            'pid',
            new GetParameterSubscriptionInfoRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.get_parameter_subscription_info.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/loyalty/config/programs/pid/account-info",
            null,
            1
        );
    }

    /**
     */
    public function testPublishLoyaltyProgram(): void {
        $testId = 'program.publish_loyalty_program.0';
        $this->client->program->publishLoyaltyProgram(
            'pid',
            [
                'headers' => [
                    'X-Test-Id' => 'program.publish_loyalty_program.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/config/programs/pid/publish",
            null,
            1
        );
    }

    /**
     */
    public function testSubscribeMemberToASubscription(): void {
        $testId = 'program.subscribe_member_to_a_subscription.0';
        $this->client->program->subscribeMemberToASubscription(
            'pid',
            new SubscribeMemberToASubscriptionRequest([
                'memberContactIds' => [
                    1,
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.subscribe_member_to_a_subscription.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/config/programs/pid/subscription-members",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteContactMembers(): void {
        $testId = 'program.delete_contact_members.0';
        $this->client->program->deleteContactMembers(
            'pid',
            new DeleteContactMembersRequest([
                'memberContactIds' => 'memberContactIds',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.delete_contact_members.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/loyalty/config/programs/pid/subscription-members",
            ['memberContactIds' => 'memberContactIds'],
            1
        );
    }

    /**
     */
    public function testSubscribeToLoyaltyProgram(): void {
        $testId = 'program.subscribe_to_loyalty_program.0';
        $this->client->program->subscribeToLoyaltyProgram(
            'pid',
            new SubscribeToLoyaltyProgramRequest([
                'contactId' => 1,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'program.subscribe_to_loyalty_program.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/loyalty/config/programs/pid/subscriptions",
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
