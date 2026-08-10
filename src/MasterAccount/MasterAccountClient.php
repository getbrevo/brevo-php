<?php

namespace Brevo\MasterAccount;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\MasterAccount\Requests\PostCorporateGroupRequest;
use Brevo\MasterAccount\Types\PostCorporateGroupResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\MasterAccount\Requests\PutCorporateGroupUnlinkGroupIdSubAccountsRequest;
use Brevo\MasterAccount\Types\GetCorporateGroupIdResponse;
use Brevo\MasterAccount\Requests\PutCorporateGroupIdRequest;
use Brevo\MasterAccount\Types\GetSubAccountGroupsResponseItem;
use Brevo\Core\Json\JsonDecoder;
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

class MasterAccountClient implements MasterAccountClientInterface
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
     * This endpoint allows to create a group of sub-accounts
     *
     * Example:
     * ```php
     * $client->masterAccount->createANewGroupOfSubAccounts(
     *     new PostCorporateGroupRequest([
     *         'groupName' => 'My group',
     *     ]),
     * );
     * ```
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
     * @return ?PostCorporateGroupResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createANewGroupOfSubAccounts(PostCorporateGroupRequest $request, ?array $options = null): ?PostCorporateGroupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/group",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostCorporateGroupResponse::fromJson($json);
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
     * This endpoint allows you to remove a sub-organization from a group.
     *
     * Example:
     * ```php
     * $client->masterAccount->deleteSubAccountFromGroup(
     *     'groupId',
     *     new PutCorporateGroupUnlinkGroupIdSubAccountsRequest([
     *         'subAccountIds' => [
     *             423432,
     *             234323,
     *             87678,
     *         ],
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function deleteSubAccountFromGroup(string $groupId, PutCorporateGroupUnlinkGroupIdSubAccountsRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/group/unlink/{$groupId}/subAccounts",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint allows you to retrieve a specific group’s information such as
     * the list of sub-organizations and the user associated with the group.
     *
     * Example:
     * ```php
     * $client->masterAccount->getAGroupDetails(
     *     'id',
     * );
     * ```
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
     * @return ?GetCorporateGroupIdResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAGroupDetails(string $id, ?array $options = null): ?GetCorporateGroupIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/group/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateGroupIdResponse::fromJson($json);
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
     * This endpoint allows to update a group of sub-accounts
     *
     * Example:
     * ```php
     * $client->masterAccount->updateAGroupOfSubAccounts(
     *     'id',
     *     new PutCorporateGroupIdRequest([]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateAGroupOfSubAccounts(string $id, PutCorporateGroupIdRequest $request = new PutCorporateGroupIdRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/group/{$id}",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint allows you to delete a group of sub-organizations. When a
     * group is deleted, the sub-organizations are no longer part of this group.
     * The users associated with the group are no longer associated with the group
     * once deleted.
     *
     * Example:
     * ```php
     * $client->masterAccount->deleteAGroup(
     *     'id',
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function deleteAGroup(string $id, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/group/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint allows you to list all groups created on your Admin account.
     *
     * Example:
     * ```php
     * $client->masterAccount->getSubAccountGroups();
     * ```
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetSubAccountGroupsResponseItem>
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSubAccountGroups(?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/groups",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [GetSubAccountGroupsResponseItem::class]); // @phpstan-ignore-line
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
     * This endpoint allows you to list all Admin users of your Admin account. You
     * can filter users by type (active or pending) and paginate results using
     * offset and limit.
     *
     * Example:
     * ```php
     * $client->masterAccount->getCorporateInvitedUsersList(
     *     new GetCorporateInvitedUsersListRequest([]),
     * );
     * ```
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
     * @return ?GetCorporateInvitedUsersListResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getCorporateInvitedUsersList(GetCorporateInvitedUsersListRequest $request = new GetCorporateInvitedUsersListRequest(), ?array $options = null): ?GetCorporateInvitedUsersListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/invited/users",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateInvitedUsersListResponse::fromJson($json);
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
     * This endpoint allows you to retrieve the list of active IPs on your Admin
     * account
     *
     * Example:
     * ```php
     * $client->masterAccount->listOfAllIPs();
     * ```
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetCorporateIpResponseItem>
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function listOfAllIPs(?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/ip",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [GetCorporateIpResponseItem::class]); // @phpstan-ignore-line
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
     * This endpoint will provide the details of the master account.
     *
     * Example:
     * ```php
     * $client->masterAccount->getTheDetailsOfRequestedMasterAccount();
     * ```
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCorporateMasterAccountResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTheDetailsOfRequestedMasterAccount(?array $options = null): ?GetCorporateMasterAccountResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/masterAccount",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateMasterAccountResponse::fromJson($json);
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
     * This endpoint generates an SSO token to authenticate and access the admin
     * account using the endpoint
     * https://account-app.brevo.com/account/login/corporate/sso/[token], where
     * [token] will be replaced by the actual token.
     *
     * Example:
     * ```php
     * $client->masterAccount->generateSsoTokenToAccessAdminAccount(
     *     new PostCorporateSsoTokenRequest([
     *         'email' => 'vipin+ent-user@brevo.com',
     *     ]),
     * );
     * ```
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
     * @return ?GetSsoToken
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function generateSsoTokenToAccessAdminAccount(PostCorporateSsoTokenRequest $request, ?array $options = null): ?GetSsoToken
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/ssoToken",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSsoToken::fromJson($json);
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
     * This endpoint will provide the list all the sub-accounts of the master
     * account.
     *
     * Example:
     * ```php
     * $client->masterAccount->getTheListOfAllTheSubAccountsOfTheMasterAccount(
     *     new GetCorporateSubAccountRequest([
     *         'offset' => 1,
     *         'limit' => 1,
     *     ]),
     * );
     * ```
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
     * @return ?GetCorporateSubAccountResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getTheListOfAllTheSubAccountsOfTheMasterAccount(GetCorporateSubAccountRequest $request, ?array $options = null): ?GetCorporateSubAccountResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['offset'] = $request->offset;
        $query['limit'] = $request->limit;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateSubAccountResponse::fromJson($json);
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
     * This endpoint will create a new sub-account under a master account
     *
     * Example:
     * ```php
     * $client->masterAccount->createANewSubAccountUnderAMasterAccount(
     *     new PostCorporateSubAccountRequest([
     *         'companyName' => 'Test Sub-account',
     *         'email' => 'test-sub@example.com',
     *         'groupIds' => [
     *             '5f8f8c3b5f56a02d4433b3a7',
     *             '5f8f8c3b5f56a02d4433b3a8',
     *         ],
     *         'language' => PostCorporateSubAccountRequestLanguage::Fr->value,
     *         'timezone' => 'Europe/Paris',
     *     ]),
     * );
     * ```
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
     * @return ?PostCorporateSubAccountResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createANewSubAccountUnderAMasterAccount(PostCorporateSubAccountRequest $request, ?array $options = null): ?PostCorporateSubAccountResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostCorporateSubAccountResponse::fromJson($json);
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
     * This endpoint allows to associate an IP to sub-accounts
     *
     * Example:
     * ```php
     * $client->masterAccount->associateAnIpToSubAccounts(
     *     new PostCorporateSubAccountIpAssociateRequest([
     *         'ids' => [
     *             234322,
     *             325553,
     *             893432,
     *         ],
     *         'ip' => '103.11.32.88',
     *     ]),
     * );
     * ```
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
     * @return ?array<string, mixed>
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function associateAnIpToSubAccounts(PostCorporateSubAccountIpAssociateRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/ip/associate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, ['string' => 'mixed']); // @phpstan-ignore-line
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
     * This endpoint allows to dissociate an IP from sub-accounts
     *
     * Example:
     * ```php
     * $client->masterAccount->dissociateAnIpToSubAccounts(
     *     new PutCorporateSubAccountIpDissociateRequest([
     *         'ids' => [
     *             234322,
     *             325553,
     *             893432,
     *         ],
     *         'ip' => '103.11.32.88',
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function dissociateAnIpToSubAccounts(PutCorporateSubAccountIpDissociateRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/ip/dissociate",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint will generate an API v3 key for a sub-account
     *
     * Example:
     * ```php
     * $client->masterAccount->createAnApiKeyForASubAccount(
     *     new PostCorporateSubAccountKeyRequest([
     *         'id' => 3232323,
     *         'name' => 'My Api Key',
     *     ]),
     * );
     * ```
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
     * @return ?PostCorporateSubAccountKeyResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createAnApiKeyForASubAccount(PostCorporateSubAccountKeyRequest $request, ?array $options = null): ?PostCorporateSubAccountKeyResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/key",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostCorporateSubAccountKeyResponse::fromJson($json);
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
     * This endpoint generates an sso token to authenticate and access a
     * sub-account of the master using the account endpoint
     * https://account-app.brevo.com/account/login/sub-account/sso/[token], where
     * [token] will be replaced by the actual token.
     *
     * Example:
     * ```php
     * $client->masterAccount->generateSsoTokenToAccessSubAccount(
     *     new PostCorporateSubAccountSsoTokenRequest([
     *         'id' => 3232323,
     *     ]),
     * );
     * ```
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
     * @return ?GetSsoToken
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function generateSsoTokenToAccessSubAccount(PostCorporateSubAccountSsoTokenRequest $request, ?array $options = null): ?GetSsoToken
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/ssoToken",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSsoToken::fromJson($json);
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
     * This endpoint will provide the details for the specified sub-account company
     *
     * Example:
     * ```php
     * $client->masterAccount->getSubAccountDetails(
     *     1000000,
     * );
     * ```
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
     * @return ?GetCorporateSubAccountIdResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSubAccountDetails(int $id, ?array $options = null): ?GetCorporateSubAccountIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateSubAccountIdResponse::fromJson($json);
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
     * Permanently deletes a sub-account from the corporate master account. Once deleted, all data associated with the sub-account organization is removed and cannot be recovered, so ensure the sub-account is no longer needed before proceeding.
     *
     * Example:
     * ```php
     * $client->masterAccount->deleteASubAccount(
     *     1000000,
     * );
     * ```
     *
     * @param int $id Id of the sub-account organization to be deleted
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function deleteASubAccount(int $id, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * API endpoint for the Corporate owner to enable/disable applications on the
     * sub-account
     *
     * Example:
     * ```php
     * $client->masterAccount->enableDisableSubAccountApplicationS(
     *     1000000,
     *     new PutCorporateSubAccountIdApplicationsToggleRequest([
     *         'landingPages' => true,
     *         'meetings' => true,
     *         'smsCampaigns' => false,
     *         'webPush' => false,
     *         'whatsapp' => true,
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function enableDisableSubAccountApplicationS(int $id, PutCorporateSubAccountIdApplicationsToggleRequest $request = new PutCorporateSubAccountIdApplicationsToggleRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/{$id}/applications/toggle",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint will update the sub-account plan. On the Corporate solution
     * new version v2, you can set an unlimited number of credits in your
     * sub-organization. Please pass the value “-1" to set the consumable in
     * unlimited mode.
     *
     * Example:
     * ```php
     * $client->masterAccount->updateSubAccountPlan(
     *     1000000,
     *     new PutCorporateSubAccountIdPlanRequest([
     *         'credits' => new PutCorporateSubAccountIdPlanRequestCredits([
     *             'email' => 5000,
     *             'externalFeeds' => 1,
     *             'sms' => 2000,
     *             'whatsapp' => 100,
     *             'wpSubscribers' => -1,
     *         ]),
     *         'features' => new PutCorporateSubAccountIdPlanRequestFeatures([
     *             'inbox' => 10,
     *             'landingPage' => 20,
     *             'salesUsers' => 6,
     *             'users' => 15,
     *         ]),
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateSubAccountPlan(int $id, PutCorporateSubAccountIdPlanRequest $request = new PutCorporateSubAccountIdPlanRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccount/{$id}/plan",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint will update multiple sub-accounts plan. On the Corporate
     * solution new version v2, you can set an unlimited number of credits in your
     * sub-organization. Please pass the value “-1" to set the consumable in
     * unlimited mode.
     *
     * Example:
     * ```php
     * $client->masterAccount->updateSubAccountsPlan(
     *     new PutCorporateSubAccountsPlanRequest([
     *         'credits' => new PutCorporateSubAccountsPlanRequestCredits([
     *             'email' => 5000,
     *             'externalFeeds' => 1,
     *             'sms' => 2000,
     *             'whatsapp' => 100,
     *             'wpSubscribers' => -1,
     *         ]),
     *         'features' => new PutCorporateSubAccountsPlanRequestFeatures([
     *             'landingPage' => 20,
     *             'salesUsers' => 6,
     *             'users' => 15,
     *         ]),
     *         'subAccountIds' => [
     *             4534345,
     *             987893,
     *             876785,
     *         ],
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateSubAccountsPlan(PutCorporateSubAccountsPlanRequest $request = new PutCorporateSubAccountsPlanRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/subAccounts/plan",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * Example:
     * ```php
     * $client->masterAccount->inviteAdminUser(
     *     new InviteAdminUserRequest([
     *         'allFeaturesAccess' => true,
     *         'email' => 'inviteuser@example.com',
     *         'privileges' => [
     *             new InviteAdminUserRequestPrivilegesItem([]),
     *         ],
     *     ]),
     * );
     * ```
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
     * @return ?InviteAdminUserResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function inviteAdminUser(InviteAdminUserRequest $request, ?array $options = null): ?InviteAdminUserResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/user/invitation/send",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return InviteAdminUserResponse::fromJson($json);
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
     * This endpoint will allow the user to:
     * - Resend an admin user invitation
     * - Cancel an admin user invitation
     *
     * Example:
     * ```php
     * $client->masterAccount->resendCancelAdminUserInvitation(
     *     PutCorporateUserInvitationActionEmailRequestAction::Resend->value,
     *     'email',
     * );
     * ```
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
     * @return ?PutCorporateUserInvitationActionEmailResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function resendCancelAdminUserInvitation(string $action, string $email, ?array $options = null): ?PutCorporateUserInvitationActionEmailResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/user/invitation/{$action}/{$email}",
                    method: HttpMethod::PUT,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PutCorporateUserInvitationActionEmailResponse::fromJson($json);
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
     * This endpoint allows to revoke/remove an invited member of your Admin
     * account
     *
     * Example:
     * ```php
     * $client->masterAccount->revokeAnAdminUser(
     *     'email',
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function revokeAnAdminUser(string $email, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/user/revoke/{$email}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
     * This endpoint will provide the list of admin user permissions
     *
     * Example:
     * ```php
     * $client->masterAccount->getCorporateUserPermission(
     *     'email',
     * );
     * ```
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
     * @return ?GetCorporateUserPermissionResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getCorporateUserPermission(string $email, ?array $options = null): ?GetCorporateUserPermissionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/user/{$email}/permissions",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCorporateUserPermissionResponse::fromJson($json);
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
     * This endpoint will allow you to change the permissions of Admin users of
     * your Admin account
     *
     * Example:
     * ```php
     * $client->masterAccount->changeAdminUserPermissions(
     *     'email',
     *     new PutCorporateUserEmailPermissionsRequest([
     *         'allFeaturesAccess' => false,
     *         'privileges' => [
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::UserManagement->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Api->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::MyPlan->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::AppsManagement->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::CreateSubOrganizations->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::SubOrganizationGroups->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::Create->value,
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::EditDelete->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::ManageSubOrganizations->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Security->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
     *                 ],
     *             ]),
     *             new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
     *                 'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Analytics->value,
     *                 'permissions' => [
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::CreateAlerts->value,
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::DownloadData->value,
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::MyLooks->value,
     *                     PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::ExploreCreate->value,
     *                 ],
     *             ]),
     *         ],
     *     ]),
     * );
     * ```
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
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function changeAdminUserPermissions(string $email, PutCorporateUserEmailPermissionsRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "corporate/user/{$email}/permissions",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
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
