<?php

namespace Brevo\MasterAccount;

use Brevo\MasterAccount\Requests\PostCorporateGroupRequest;
use Brevo\MasterAccount\Types\PostCorporateGroupResponse;
use Brevo\MasterAccount\Requests\PutCorporateGroupUnlinkGroupIdSubAccountsRequest;
use Brevo\MasterAccount\Types\GetCorporateGroupIdResponse;
use Brevo\MasterAccount\Requests\PutCorporateGroupIdRequest;
use Brevo\MasterAccount\Types\GetSubAccountGroupsResponseItem;
use Brevo\MasterAccount\Requests\GetCorporateInvitedUsersListRequest;
use Brevo\MasterAccount\Types\GetCorporateInvitedUsersListResponse;
use Brevo\MasterAccount\Types\GetCorporateIpResponseItem;
use Brevo\MasterAccount\Types\GetCorporateMasterAccountResponse;
use Brevo\MasterAccount\Requests\PostCorporateSsoTokenRequest;
use Brevo\Types\GetSsoToken;
use Brevo\MasterAccount\Requests\GetCorporateSubAccountRequest;
use Brevo\MasterAccount\Types\GetCorporateSubAccountResponse;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountRequest;
use Brevo\MasterAccount\Types\PostCorporateSubAccountResponse;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountIpAssociateRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIpDissociateRequest;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountKeyRequest;
use Brevo\MasterAccount\Types\PostCorporateSubAccountKeyResponse;
use Brevo\MasterAccount\Requests\PostCorporateSubAccountSsoTokenRequest;
use Brevo\MasterAccount\Types\GetCorporateSubAccountIdResponse;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIdApplicationsToggleRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountIdPlanRequest;
use Brevo\MasterAccount\Requests\PutCorporateSubAccountsPlanRequest;
use Brevo\MasterAccount\Requests\InviteAdminUserRequest;
use Brevo\MasterAccount\Types\InviteAdminUserResponse;
use Brevo\MasterAccount\Types\PutCorporateUserInvitationActionEmailRequestAction;
use Brevo\MasterAccount\Types\PutCorporateUserInvitationActionEmailResponse;
use Brevo\MasterAccount\Types\GetCorporateUserPermissionResponse;
use Brevo\MasterAccount\Requests\PutCorporateUserEmailPermissionsRequest;

interface MasterAccountClientInterface
{
    /**
     * This endpoint allows to create a group of sub-accounts
     *
     * @param PostCorporateGroupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCorporateGroupResponse
     */
    public function createANewGroupOfSubAccounts(PostCorporateGroupRequest $request, ?array $options = null): PostCorporateGroupResponse;

    /**
     * This endpoint allows you to remove a sub-organization from a group.
     *
     * @param string $groupId Group id
     * @param PutCorporateGroupUnlinkGroupIdSubAccountsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteSubAccountFromGroup(string $groupId, PutCorporateGroupUnlinkGroupIdSubAccountsRequest $request, ?array $options = null): void;

    /**
     * This endpoint allows you to retrieve a specific group’s information such as
     * the list of sub-organizations and the user associated with the group.
     *
     * @param string $id Id of the group of sub-organization
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateGroupIdResponse
     */
    public function getAGroupDetails(string $id, ?array $options = null): GetCorporateGroupIdResponse;

    /**
     * This endpoint allows to update a group of sub-accounts
     *
     * @param string $id Id of the group
     * @param PutCorporateGroupIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateAGroupOfSubAccounts(string $id, PutCorporateGroupIdRequest $request = new PutCorporateGroupIdRequest(), ?array $options = null): void;

    /**
     * This endpoint allows you to delete a group of sub-organizations. When a
     * group is deleted, the sub-organizations are no longer part of this group.
     * The users associated with the group are no longer associated with the group
     * once deleted.
     *
     * @param string $id Id of the group
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAGroup(string $id, ?array $options = null): void;

    /**
     * This endpoint allows you to list all groups created on your Admin account.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<GetSubAccountGroupsResponseItem>
     */
    public function getSubAccountGroups(?array $options = null): array;

    /**
     * This endpoint allows you to list all Admin users of your Admin account. You
     * can filter users by type (active or pending) and paginate results using
     * offset and limit.
     *
     * @param GetCorporateInvitedUsersListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateInvitedUsersListResponse
     */
    public function getCorporateInvitedUsersList(GetCorporateInvitedUsersListRequest $request = new GetCorporateInvitedUsersListRequest(), ?array $options = null): GetCorporateInvitedUsersListResponse;

    /**
     * This endpoint allows you to retrieve the list of active IPs on your Admin
     * account
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<GetCorporateIpResponseItem>
     */
    public function listOfAllIPs(?array $options = null): array;

    /**
     * This endpoint will provide the details of the master account.
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateMasterAccountResponse
     */
    public function getTheDetailsOfRequestedMasterAccount(?array $options = null): GetCorporateMasterAccountResponse;

    /**
     * This endpoint generates an SSO token to authenticate and access the admin
     * account using the endpoint
     * https://account-app.brevo.com/account/login/corporate/sso/[token], where
     * [token] will be replaced by the actual token.
     *
     * @param PostCorporateSsoTokenRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSsoToken
     */
    public function generateSsoTokenToAccessAdminAccount(PostCorporateSsoTokenRequest $request, ?array $options = null): GetSsoToken;

    /**
     * This endpoint will provide the list all the sub-accounts of the master
     * account.
     *
     * @param GetCorporateSubAccountRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateSubAccountResponse
     */
    public function getTheListOfAllTheSubAccountsOfTheMasterAccount(GetCorporateSubAccountRequest $request, ?array $options = null): GetCorporateSubAccountResponse;

    /**
     * This endpoint will create a new sub-account under a master account
     *
     * @param PostCorporateSubAccountRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCorporateSubAccountResponse
     */
    public function createANewSubAccountUnderAMasterAccount(PostCorporateSubAccountRequest $request, ?array $options = null): PostCorporateSubAccountResponse;

    /**
     * This endpoint allows to associate an IP to sub-accounts
     *
     * @param PostCorporateSubAccountIpAssociateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<string, mixed>
     */
    public function associateAnIpToSubAccounts(PostCorporateSubAccountIpAssociateRequest $request, ?array $options = null): array;

    /**
     * This endpoint allows to dissociate an IP from sub-accounts
     *
     * @param PutCorporateSubAccountIpDissociateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function dissociateAnIpToSubAccounts(PutCorporateSubAccountIpDissociateRequest $request, ?array $options = null): void;

    /**
     * This endpoint will generate an API v3 key for a sub-account
     *
     * @param PostCorporateSubAccountKeyRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCorporateSubAccountKeyResponse
     */
    public function createAnApiKeyForASubAccount(PostCorporateSubAccountKeyRequest $request, ?array $options = null): PostCorporateSubAccountKeyResponse;

    /**
     * This endpoint generates an sso token to authenticate and access a
     * sub-account of the master using the account endpoint
     * https://account-app.brevo.com/account/login/sub-account/sso/[token], where
     * [token] will be replaced by the actual token.
     *
     * @param PostCorporateSubAccountSsoTokenRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSsoToken
     */
    public function generateSsoTokenToAccessSubAccount(PostCorporateSubAccountSsoTokenRequest $request, ?array $options = null): GetSsoToken;

    /**
     * This endpoint will provide the details for the specified sub-account company
     *
     * @param int $id Id of the sub-account organization
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateSubAccountIdResponse
     */
    public function getSubAccountDetails(int $id, ?array $options = null): GetCorporateSubAccountIdResponse;

    /**
     * @param int $id Id of the sub-account organization to be deleted
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteASubAccount(int $id, ?array $options = null): void;

    /**
     * API endpoint for the Corporate owner to enable/disable applications on the
     * sub-account
     *
     * @param int $id Id of the sub-account organization (mandatory)
     * @param PutCorporateSubAccountIdApplicationsToggleRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function enableDisableSubAccountApplicationS(int $id, PutCorporateSubAccountIdApplicationsToggleRequest $request = new PutCorporateSubAccountIdApplicationsToggleRequest(), ?array $options = null): void;

    /**
     * This endpoint will update the sub-account plan. On the Corporate solution
     * new version v2, you can set an unlimited number of credits in your
     * sub-organization. Please pass the value “-1" to set the consumable in
     * unlimited mode.
     *
     * @param int $id Id of the sub-account organization
     * @param PutCorporateSubAccountIdPlanRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSubAccountPlan(int $id, PutCorporateSubAccountIdPlanRequest $request = new PutCorporateSubAccountIdPlanRequest(), ?array $options = null): void;

    /**
     * This endpoint will update multiple sub-accounts plan. On the Corporate
     * solution new version v2, you can set an unlimited number of credits in your
     * sub-organization. Please pass the value “-1" to set the consumable in
     * unlimited mode.
     *
     * @param PutCorporateSubAccountsPlanRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSubAccountsPlan(PutCorporateSubAccountsPlanRequest $request = new PutCorporateSubAccountsPlanRequest(), ?array $options = null): void;

    /**
     * `This endpoint allows you to invite a member to manage the Admin account
     * Features and their respective permissions are as below: - `my_plan`:
     *   - "all"
     * - `api`:
     *   - "none"
     * - `user_management`:
     *   - "all"
     * - `app_management` | Not available in ENTv2:
     *   - "all"
     * - `sub_organization_groups`
     *   - "create"
     *   - "edit_delete"
     * - `create_sub_organizations`
     *   - "all"
     * - `manage_sub_organizations`
     *   - "all"
     * - `analytics`
     *   - "download_data"
     *   - "create_alerts"
     *   - "my_looks"
     *   - "explore_create"
     * - `security`
     *   - "all"
     * **Note**: - If `all_features_access: false` then only privileges are
     * required otherwise if `true` then it's assumed that all permissions will be
     * there for the invited admin user.
     *
     * @param InviteAdminUserRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return InviteAdminUserResponse
     */
    public function inviteAdminUser(InviteAdminUserRequest $request, ?array $options = null): InviteAdminUserResponse;

    /**
     * This endpoint will allow the user to:
     * - Resend an admin user invitation
     * - Cancel an admin user invitation
     *
     * @param value-of<PutCorporateUserInvitationActionEmailRequestAction> $action Action to be performed (cancel / resend)
     * @param string $email Email address of the recipient
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PutCorporateUserInvitationActionEmailResponse
     */
    public function resendCancelAdminUserInvitation(string $action, string $email, ?array $options = null): PutCorporateUserInvitationActionEmailResponse;

    /**
     * This endpoint allows to revoke/remove an invited member of your Admin
     * account
     *
     * @param string $email Email of the invited user
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function revokeAnAdminUser(string $email, ?array $options = null): void;

    /**
     * This endpoint will provide the list of admin user permissions
     *
     * @param string $email Email of the invited user.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetCorporateUserPermissionResponse
     */
    public function getCorporateUserPermission(string $email, ?array $options = null): GetCorporateUserPermissionResponse;

    /**
     * This endpoint will allow you to change the permissions of Admin users of
     * your Admin account
     *
     * @param string $email Email address of Admin user
     * @param PutCorporateUserEmailPermissionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function changeAdminUserPermissions(string $email, PutCorporateUserEmailPermissionsRequest $request, ?array $options = null): void;
}
