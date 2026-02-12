<?php

namespace Brevo\User;

use Brevo\User\Types\GetInvitedUsersListResponse;
use Brevo\User\Types\PutRevokeUserPermissionResponse;
use Brevo\Types\Inviteuser;
use Brevo\User\Types\InviteuserResponse;
use Brevo\User\Types\PutresendcancelinvitationRequestAction;
use Brevo\User\Types\PutresendcancelinvitationResponse;
use Brevo\User\Types\EditUserPermissionResponse;
use Brevo\User\Types\GetUserPermissionResponse;

interface UserClientInterface
{
    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetInvitedUsersListResponse
     */
    public function getInvitedUsersList(?array $options = null): GetInvitedUsersListResponse;

    /**
     * @param string $email Email of the invited user.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PutRevokeUserPermissionResponse
     */
    public function putRevokeUserPermission(string $email, ?array $options = null): PutRevokeUserPermissionResponse;

    /**
     * `Feature` - A Feature represents a specific functionality like Email
     * campaign, Deals, Calls, Automations, etc. on Brevo. While inviting a user,
     * determine which feature you want to manage access to. You must specify the
     * feature accurately to avoid errors. `Permission` - A Permission defines the
     * level of access or control a user has over a specific feature. While
     * inviting user, decide on the permission level required for the selected
     * feature. Make sure the chosen permission is related to the selected feature.
     * Features and their respective permissions are as below: - `email_campaigns`:
     *   - "create_edit_delete"
     *   - "send_schedule_suspend"
     * - `sms_campaigns`:
     *   - "create_edit_delete"
     *   - "send_schedule_suspend"
     * - `contacts`:
     *   - "view"
     *   - "create_edit_delete"
     *   - "import"
     *   - "export"
     *   - "list_and_attributes"
     *   - "forms"
     * - `templates`:
     *   - "create_edit_delete"
     *   - "activate_deactivate"
     * - `workflows`:
     *   - "create_edit_delete"
     *   - "activate_deactivate_pause"
     *   - "settings"
     * - `landing_pages`:
     *   - "all"
     * - `transactional_emails`:
     *   - "settings"
     *   - "logs"
     * - `smtp_api`:
     *   - "smtp"
     *   - "api_keys"
     *   - "authorized_ips"
     * - `user_management`:
     *   - "all"
     * - `sales_platform`:
     *   - "create_edit_deals"
     *   - "delete_deals"
     *   - "manage_others_deals_tasks"
     *   - "reports"
     *   - "settings"
     * - `phone`:
     *   - "all"
     * - `conversations`:
     *   - "access"
     *   - "assign"
     *   - "configure"
     * - `senders_domains_dedicated_ips`:
     *   - "senders_management"
     *   - "domains_management"
     *   - "dedicated_ips_management"
     * - `push_notifications`:
     *   - "view"
     *   - "create_edit_delete"
     *   - "send"
     *   - "settings"
     * - `companies`:
     *   - "manage_owned_companies"
     *   - "manage_other_companies"
     *   - "settings"
     * **Note**: - If `all_features_access: false` then only privileges are
     * required otherwise if `true` then it's assumed that all permissions will be
     * there for the invited user. - The availability of feature and its permission
     * depends on your current plan. Please select the features and permissions
     * accordingly.
     *
     * @param Inviteuser $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return InviteuserResponse
     */
    public function inviteuser(Inviteuser $request, ?array $options = null): InviteuserResponse;

    /**
     * @param value-of<PutresendcancelinvitationRequestAction> $action action
     * @param string $email Email of the invited user.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PutresendcancelinvitationResponse
     */
    public function putresendcancelinvitation(string $action, string $email, ?array $options = null): PutresendcancelinvitationResponse;

    /**
     * `Feature` - A Feature represents a specific functionality like Email
     * campaign, Deals, Calls, Automations, etc. on Brevo. While inviting a user,
     * determine which feature you want to manage access to. You must specify the
     * feature accurately to avoid errors. `Permission` - A Permission defines the
     * level of access or control a user has over a specific feature. While
     * inviting user, decide on the permission level required for the selected
     * feature. Make sure the chosen permission is related to the selected feature.
     * Features and their respective permissions are as below: - `email_campaigns`:
     *   - "create_edit_delete"
     *   - "send_schedule_suspend"
     * - `sms_campaigns`:
     *   - "create_edit_delete"
     *   - "send_schedule_suspend"
     * - `contacts`:
     *   - "view"
     *   - "create_edit_delete"
     *   - "import"
     *   - "export"
     *   - "list_and_attributes"
     *   - "forms"
     * - `templates`:
     *   - "create_edit_delete"
     *   - "activate_deactivate"
     * - `workflows`:
     *   - "create_edit_delete"
     *   - "activate_deactivate_pause"
     *   - "settings"
     * - `landing_pages`:
     *   - "all"
     * - `transactional_emails`:
     *   - "settings"
     *   - "logs"
     * - `smtp_api`:
     *   - "smtp"
     *   - "api_keys"
     *   - "authorized_ips"
     * - `user_management`:
     *   - "all"
     * - `sales_platform`:
     *   - "create_edit_deals"
     *   - "delete_deals"
     *   - "manage_others_deals_tasks"
     *   - "reports"
     *   - "settings"
     * - `phone`:
     *   - "all"
     * - `conversations`:
     *   - "access"
     *   - "assign"
     *   - "configure"
     * - `senders_domains_dedicated_ips`:
     *   - "senders_management"
     *   - "domains_management"
     *   - "dedicated_ips_management"
     * - `push_notifications`:
     *   - "view"
     *   - "create_edit_delete"
     *   - "send"
     *   - "settings"
     * - `companies`:
     *   - "manage_owned_companies"
     *   - "manage_other_companies"
     *   - "settings"
     * **Note**: - The privileges array remains the same as in the send invitation;
     * the user simply needs to provide the permissions that need to be updated. -
     * The availability of feature and its permission depends on your current plan.
     * Please select the features and permissions accordingly.
     *
     * @param Inviteuser $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return EditUserPermissionResponse
     */
    public function editUserPermission(Inviteuser $request, ?array $options = null): EditUserPermissionResponse;

    /**
     * @param string $email Email of the invited user.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetUserPermissionResponse
     */
    public function getUserPermission(string $email, ?array $options = null): GetUserPermissionResponse;
}
