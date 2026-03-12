<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\MasterAccount\Requests\PostCorporateGroupRequest;
use Brevo\MasterAccount\Requests\PutCorporateGroupUnlinkGroupIdSubAccountsRequest;
use Brevo\MasterAccount\Requests\PutCorporateGroupIdRequest;
use Brevo\MasterAccount\Requests\GetCorporateInvitedUsersListRequest;
use Brevo\MasterAccount\Requests\PostCorporateSsoTokenRequest;
use Brevo\MasterAccount\Requests\GetCorporateSubAccountRequest;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountRequest;
use Brevo\MasterAccount\Types\PostCorporateSubAccountRequestLanguage;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountIpAssociateRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIpDissociateRequest;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountKeyRequest;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountSsoTokenRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIdApplicationsToggleRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIdPlanRequest;
use Brevo\MasterAccount\Types\PutCorporateSubAccountIdPlanRequestCredits;
use Brevo\MasterAccount\Types\PutCorporateSubAccountIdPlanRequestFeatures;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountsPlanRequest;
use Brevo\MasterAccount\Types\PutCorporateSubAccountsPlanRequestCredits;
use Brevo\MasterAccount\Types\PutCorporateSubAccountsPlanRequestFeatures;
use Brevo\MasterAccount\Requests\InviteAdminUserRequest;
use Brevo\MasterAccount\Types\InviteAdminUserRequestPrivilegesItem;
use Brevo\MasterAccount\Types\PutCorporateUserInvitationActionEmailRequestAction;
use Brevo\MasterAccount\Requests\PutCorporateUserEmailPermissionsRequest;
use Brevo\MasterAccount\Types\PutCorporateUserEmailPermissionsRequestPrivilegesItem;
use Brevo\MasterAccount\Types\PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature;
use Brevo\MasterAccount\Types\PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem;

class MasterAccountWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testCreateANewGroupOfSubAccounts(): void {
        $testId = 'master_account.create_a_new_group_of_sub_accounts.0';
        $this->client->masterAccount->createANewGroupOfSubAccounts(
            new PostCorporateGroupRequest([
                'groupName' => 'My group',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.create_a_new_group_of_sub_accounts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/group",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteSubAccountFromGroup(): void {
        $testId = 'master_account.delete_sub_account_from_group.0';
        $this->client->masterAccount->deleteSubAccountFromGroup(
            'groupId',
            new PutCorporateGroupUnlinkGroupIdSubAccountsRequest([
                'subAccountIds' => [
                    423432,
                    234323,
                    87678,
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.delete_sub_account_from_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/group/unlink/groupId/subAccounts",
            null,
            1
        );
    }

    /**
     */
    public function testGetAGroupDetails(): void {
        $testId = 'master_account.get_a_group_details.0';
        $this->client->masterAccount->getAGroupDetails(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_a_group_details.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/group/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateAGroupOfSubAccounts(): void {
        $testId = 'master_account.update_a_group_of_sub_accounts.0';
        $this->client->masterAccount->updateAGroupOfSubAccounts(
            'id',
            new PutCorporateGroupIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.update_a_group_of_sub_accounts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/group/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAGroup(): void {
        $testId = 'master_account.delete_a_group.0';
        $this->client->masterAccount->deleteAGroup(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.delete_a_group.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/corporate/group/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetSubAccountGroups(): void {
        $testId = 'master_account.get_sub_account_groups.0';
        $this->client->masterAccount->getSubAccountGroups(
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_sub_account_groups.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/groups",
            null,
            1
        );
    }

    /**
     */
    public function testGetCorporateInvitedUsersList(): void {
        $testId = 'master_account.get_corporate_invited_users_list.0';
        $this->client->masterAccount->getCorporateInvitedUsersList(
            new GetCorporateInvitedUsersListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_corporate_invited_users_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/invited/users",
            null,
            1
        );
    }

    /**
     */
    public function testListOfAllIPs(): void {
        $testId = 'master_account.list_of_all_i_ps.0';
        $this->client->masterAccount->listOfAllIPs(
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.list_of_all_i_ps.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/ip",
            null,
            1
        );
    }

    /**
     */
    public function testGetTheDetailsOfRequestedMasterAccount(): void {
        $testId = 'master_account.get_the_details_of_requested_master_account.0';
        $this->client->masterAccount->getTheDetailsOfRequestedMasterAccount(
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_the_details_of_requested_master_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/masterAccount",
            null,
            1
        );
    }

    /**
     */
    public function testGenerateSsoTokenToAccessAdminAccount(): void {
        $testId = 'master_account.generate_sso_token_to_access_admin_account.0';
        $this->client->masterAccount->generateSsoTokenToAccessAdminAccount(
            new PostCorporateSsoTokenRequest([
                'email' => 'vipin+ent-user@brevo.com',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.generate_sso_token_to_access_admin_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/ssoToken",
            null,
            1
        );
    }

    /**
     */
    public function testGetTheListOfAllTheSubAccountsOfTheMasterAccount(): void {
        $testId = 'master_account.get_the_list_of_all_the_sub_accounts_of_the_master_account.0';
        $this->client->masterAccount->getTheListOfAllTheSubAccountsOfTheMasterAccount(
            new GetCorporateSubAccountRequest([
                'offset' => 1,
                'limit' => 1,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_the_list_of_all_the_sub_accounts_of_the_master_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/subAccount",
            ['offset' => '1', 'limit' => '1'],
            1
        );
    }

    /**
     */
    public function testCreateANewSubAccountUnderAMasterAccount(): void {
        $testId = 'master_account.create_a_new_sub_account_under_a_master_account.0';
        $this->client->masterAccount->createANewSubAccountUnderAMasterAccount(
            new PostCorporateSubAccountRequest([
                'companyName' => 'Test Sub-account',
                'email' => 'test-sub@example.com',
                'groupIds' => [
                    '5f8f8c3b5f56a02d4433b3a7',
                    '5f8f8c3b5f56a02d4433b3a8',
                ],
                'language' => PostCorporateSubAccountRequestLanguage::Fr->value,
                'timezone' => 'Europe/Paris',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.create_a_new_sub_account_under_a_master_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/subAccount",
            null,
            1
        );
    }

    /**
     */
    public function testAssociateAnIpToSubAccounts(): void {
        $testId = 'master_account.associate_an_ip_to_sub_accounts.0';
        $this->client->masterAccount->associateAnIpToSubAccounts(
            new PostCorporateSubAccountIpAssociateRequest([
                'ids' => [
                    234322,
                    325553,
                    893432,
                ],
                'ip' => '103.11.32.88',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.associate_an_ip_to_sub_accounts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/subAccount/ip/associate",
            null,
            1
        );
    }

    /**
     */
    public function testDissociateAnIpToSubAccounts(): void {
        $testId = 'master_account.dissociate_an_ip_to_sub_accounts.0';
        $this->client->masterAccount->dissociateAnIpToSubAccounts(
            new PutCorporateSubAccountIpDissociateRequest([
                'ids' => [
                    234322,
                    325553,
                    893432,
                ],
                'ip' => '103.11.32.88',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.dissociate_an_ip_to_sub_accounts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/subAccount/ip/dissociate",
            null,
            1
        );
    }

    /**
     */
    public function testCreateAnApiKeyForASubAccount(): void {
        $testId = 'master_account.create_an_api_key_for_a_sub_account.0';
        $this->client->masterAccount->createAnApiKeyForASubAccount(
            new PostCorporateSubAccountKeyRequest([
                'id' => 3232323,
                'name' => 'My Api Key',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.create_an_api_key_for_a_sub_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/subAccount/key",
            null,
            1
        );
    }

    /**
     */
    public function testGenerateSsoTokenToAccessSubAccount(): void {
        $testId = 'master_account.generate_sso_token_to_access_sub_account.0';
        $this->client->masterAccount->generateSsoTokenToAccessSubAccount(
            new PostCorporateSubAccountSsoTokenRequest([
                'id' => 3232323,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.generate_sso_token_to_access_sub_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/subAccount/ssoToken",
            null,
            1
        );
    }

    /**
     */
    public function testGetSubAccountDetails(): void {
        $testId = 'master_account.get_sub_account_details.0';
        $this->client->masterAccount->getSubAccountDetails(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_sub_account_details.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/subAccount/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteASubAccount(): void {
        $testId = 'master_account.delete_a_sub_account.0';
        $this->client->masterAccount->deleteASubAccount(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.delete_a_sub_account.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/corporate/subAccount/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testEnableDisableSubAccountApplicationS(): void {
        $testId = 'master_account.enable_disable_sub_account_application_s.0';
        $this->client->masterAccount->enableDisableSubAccountApplicationS(
            1000000,
            new PutCorporateSubAccountIdApplicationsToggleRequest([
                'landingPages' => true,
                'meetings' => true,
                'smsCampaigns' => false,
                'webPush' => false,
                'whatsapp' => true,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.enable_disable_sub_account_application_s.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/subAccount/1000000/applications/toggle",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSubAccountPlan(): void {
        $testId = 'master_account.update_sub_account_plan.0';
        $this->client->masterAccount->updateSubAccountPlan(
            1000000,
            new PutCorporateSubAccountIdPlanRequest([
                'credits' => new PutCorporateSubAccountIdPlanRequestCredits([
                    'email' => 5000,
                    'externalFeeds' => 1,
                    'sms' => 2000,
                    'whatsapp' => 100,
                    'wpSubscribers' => -1,
                ]),
                'features' => new PutCorporateSubAccountIdPlanRequestFeatures([
                    'inbox' => 10,
                    'landingPage' => 20,
                    'salesUsers' => 6,
                    'users' => 15,
                ]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.update_sub_account_plan.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/subAccount/1000000/plan",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateSubAccountsPlan(): void {
        $testId = 'master_account.update_sub_accounts_plan.0';
        $this->client->masterAccount->updateSubAccountsPlan(
            new PutCorporateSubAccountsPlanRequest([
                'credits' => new PutCorporateSubAccountsPlanRequestCredits([
                    'email' => 5000,
                    'externalFeeds' => 1,
                    'sms' => 2000,
                    'whatsapp' => 100,
                    'wpSubscribers' => -1,
                ]),
                'features' => new PutCorporateSubAccountsPlanRequestFeatures([
                    'landingPage' => 20,
                    'salesUsers' => 6,
                    'users' => 15,
                ]),
                'subAccountIds' => [
                    4534345,
                    987893,
                    876785,
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.update_sub_accounts_plan.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/subAccounts/plan",
            null,
            1
        );
    }

    /**
     */
    public function testInviteAdminUser(): void {
        $testId = 'master_account.invite_admin_user.0';
        $this->client->masterAccount->inviteAdminUser(
            new InviteAdminUserRequest([
                'allFeaturesAccess' => true,
                'email' => 'inviteuser@example.com',
                'privileges' => [
                    new InviteAdminUserRequestPrivilegesItem([]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.invite_admin_user.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/corporate/user/invitation/send",
            null,
            1
        );
    }

    /**
     */
    public function testResendCancelAdminUserInvitation(): void {
        $testId = 'master_account.resend_cancel_admin_user_invitation.0';
        $this->client->masterAccount->resendCancelAdminUserInvitation(
            PutCorporateUserInvitationActionEmailRequestAction::Resend->value,
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.resend_cancel_admin_user_invitation.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/user/invitation/resend/email",
            null,
            1
        );
    }

    /**
     */
    public function testRevokeAnAdminUser(): void {
        $testId = 'master_account.revoke_an_admin_user.0';
        $this->client->masterAccount->revokeAnAdminUser(
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.revoke_an_admin_user.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/corporate/user/revoke/email",
            null,
            1
        );
    }

    /**
     */
    public function testGetCorporateUserPermission(): void {
        $testId = 'master_account.get_corporate_user_permission.0';
        $this->client->masterAccount->getCorporateUserPermission(
            'email',
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.get_corporate_user_permission.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/corporate/user/email/permissions",
            null,
            1
        );
    }

    /**
     */
    public function testChangeAdminUserPermissions(): void {
        $testId = 'master_account.change_admin_user_permissions.0';
        $this->client->masterAccount->changeAdminUserPermissions(
            'email',
            new PutCorporateUserEmailPermissionsRequest([
                'allFeaturesAccess' => false,
                'privileges' => [
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::UserManagement->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Api->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::MyPlan->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::AppsManagement->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::CreateSubOrganizations->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::SubOrganizationGroups->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::Create->value,
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::EditDelete->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::ManageSubOrganizations->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Security->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
                        ],
                    ]),
                    new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                        'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Analytics->value,
                        'permissions' => [
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::CreateAlerts->value,
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::DownloadData->value,
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::MyLooks->value,
                            PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::ExploreCreate->value,
                        ],
                    ]),
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'master_account.change_admin_user_permissions.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/corporate/user/email/permissions",
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
