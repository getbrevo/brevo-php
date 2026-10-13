<?php

namespace Brevo\OAuth\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetOAuthM2MTokenRequest extends JsonSerializableType
{
    /**
     * @var 'client_credentials' $grantType
     */
    #[JsonProperty('grant_type')]
    public string $grantType;

    /**
     * @var string $clientId
     */
    #[JsonProperty('client_id')]
    public string $clientId;

    /**
     * @var string $clientSecret
     */
    #[JsonProperty('client_secret')]
    public string $clientSecret;

    /**
     * @var ?string $scope Space-separated list of requested scopes.
     */
    #[JsonProperty('scope')]
    public ?string $scope;

    /**
     * @param array{
     *   grantType: 'client_credentials',
     *   clientId: string,
     *   clientSecret: string,
     *   scope?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grantType = $values['grantType'];
        $this->clientId = $values['clientId'];
        $this->clientSecret = $values['clientSecret'];
        $this->scope = $values['scope'] ?? null;
    }
}
