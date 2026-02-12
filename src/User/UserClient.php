<?php

namespace Brevo\User;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\User\Types\GetInvitedUsersListResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\User\Types\PutRevokeUserPermissionResponse;
use Brevo\Types\Inviteuser;
use Brevo\User\Types\InviteuserResponse;
use Brevo\User\Types\PutresendcancelinvitationRequestAction;
use Brevo\User\Types\PutresendcancelinvitationResponse;
use Brevo\User\Types\EditUserPermissionResponse;
use Brevo\User\Types\GetUserPermissionResponse;

class UserClient implements UserClientInterface
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getInvitedUsersList(?array $options = null): GetInvitedUsersListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/invited/users",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetInvitedUsersListResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function putRevokeUserPermission(string $email, ?array $options = null): PutRevokeUserPermissionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/user/invitation/revoke/{$email}",
                    method: HttpMethod::PUT,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PutRevokeUserPermissionResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function inviteuser(Inviteuser $request, ?array $options = null): InviteuserResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/user/invitation/send",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return InviteuserResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function putresendcancelinvitation(string $action, string $email, ?array $options = null): PutresendcancelinvitationResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/user/invitation/{$action}/{$email}",
                    method: HttpMethod::PUT,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PutresendcancelinvitationResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function editUserPermission(Inviteuser $request, ?array $options = null): EditUserPermissionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/user/update/permissions",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return EditUserPermissionResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getUserPermission(string $email, ?array $options = null): GetUserPermissionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "organization/user/{$email}/permissions",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetUserPermissionResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
