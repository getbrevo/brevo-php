<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Types\Inviteuser;
use Brevo\Types\InviteuserPrivilegesItem;
use Brevo\User\Types\PutresendcancelinvitationRequestAction;

class UserWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetInvitedUsersList(): void {
        $testId = 'user.get_invited_users_list.0';
        $this->client->user->getInvitedUsersList(
            [
                'headers' => [
                    'X-Test-Id' => 'user.get_invited_users_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/organization/invited/users",
            null,
            1
        );
    }

    /**
     */
    public function testPutRevokeUserPermission(): void {
        $testId = 'user.put_revoke_user_permission.0';
        $this->client->user->putRevokeUserPermission(
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'user.put_revoke_user_permission.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/organization/user/invitation/revoke/email",
            null,
            1
        );
    }

    /**
     */
    public function testInviteuser(): void {
        $testId = 'user.inviteuser.0';
        $this->client->user->inviteuser(
            new Inviteuser([
                'allFeaturesAccess' => true,
                'email' => 'inviteuser@example.com',
                'privileges' => [
                    new InviteuserPrivilegesItem([]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'user.inviteuser.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/organization/user/invitation/send",
            null,
            1
        );
    }

    /**
     */
    public function testPutresendcancelinvitation(): void {
        $testId = 'user.putresendcancelinvitation.0';
        $this->client->user->putresendcancelinvitation(
            PutresendcancelinvitationRequestAction::Resend->value,
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'user.putresendcancelinvitation.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/organization/user/invitation/resend/email",
            null,
            1
        );
    }

    /**
     */
    public function testEditUserPermission(): void {
        $testId = 'user.edit_user_permission.0';
        $this->client->user->editUserPermission(
            new Inviteuser([
                'allFeaturesAccess' => true,
                'email' => 'inviteuser@example.com',
                'privileges' => [
                    new InviteuserPrivilegesItem([]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'user.edit_user_permission.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/organization/user/update/permissions",
            null,
            1
        );
    }

    /**
     */
    public function testGetUserPermission(): void {
        $testId = 'user.get_user_permission.0';
        $this->client->user->getUserPermission(
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'user.get_user_permission.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/organization/user/email/permissions",
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
