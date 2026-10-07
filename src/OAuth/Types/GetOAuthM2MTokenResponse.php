<?php

namespace Brevo\OAuth\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetOAuthM2MTokenResponse extends JsonSerializableType
{
    /**
     * @var string $accessToken
     */
    #[JsonProperty('access_token')]
    public string $accessToken;

    /**
     * @var ?'Bearer' $tokenType
     */
    #[JsonProperty('token_type')]
    public ?string $tokenType;

    /**
     * @var int $expiresIn Token lifetime in seconds (~3600).
     */
    #[JsonProperty('expires_in')]
    public int $expiresIn;

    /**
     * @param array{
     *   accessToken: string,
     *   expiresIn: int,
     *   tokenType?: ?'Bearer',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessToken = $values['accessToken'];
        $this->tokenType = $values['tokenType'] ?? null;
        $this->expiresIn = $values['expiresIn'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
