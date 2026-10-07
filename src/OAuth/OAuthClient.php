<?php

namespace Brevo\OAuth;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\Environments;
use Brevo\OAuth\Requests\GetOAuthM2MTokenRequest;
use Brevo\OAuth\Types\GetOAuthM2MTokenResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Client\UrlEncodedApiRequest;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class OAuthClient implements OAuthClientInterface
{
    /**
     * @var array{
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
     * @var Environments $environment
     */
    private Environments $environment;

    /**
     * @param RawClient $client
     * @param Environments $environment
     */
    public function __construct(
        RawClient $client,
        Environments $environment,
    ) {
        $this->client = $client;
        $this->environment = $environment;
        $this->options = [];
    }

    /**
     * Exchanges an app's client_id/client_secret for a short-lived access token using the OAuth 2.0 client_credentials grant (RFC 6749 §4.4). Confirmed working via a direct manual test (2026-09-18). See docs/superpowers/specs/ for the design.
     *
     * Example:
     * ```php
     * $client->oAuth->getOAuthM2MToken(
     *     new GetOAuthM2MTokenRequest([
     *         'grantType' => 'client_credentials',
     *         'clientId' => 'client_id',
     *         'clientSecret' => 'client_secret',
     *     ]),
     * );
     * ```
     *
     * @param GetOAuthM2MTokenRequest $request
     * @param ?array{
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetOAuthM2MTokenResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getOAuthM2MToken(GetOAuthM2MTokenRequest $request, ?array $options = null): ?GetOAuthM2MTokenResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new UrlEncodedApiRequest(
                    baseUrl: $this->environment->oAuth,
                    path: "oauth/token",
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
                return GetOAuthM2MTokenResponse::fromJson($json);
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
