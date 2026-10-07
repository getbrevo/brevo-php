<?php

namespace Brevo\OAuth;

use Brevo\OAuth\Requests\GetOAuthM2MTokenRequest;
use Brevo\OAuth\Types\GetOAuthM2MTokenResponse;

interface OAuthClientInterface
{
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
     */
    public function getOAuthM2MToken(GetOAuthM2MTokenRequest $request, ?array $options = null): ?GetOAuthM2MTokenResponse;
}
