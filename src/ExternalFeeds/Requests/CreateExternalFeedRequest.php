<?php

namespace Brevo\ExternalFeeds\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\ExternalFeeds\Types\CreateExternalFeedRequestAuthType;
use Brevo\ExternalFeeds\Types\CreateExternalFeedRequestHeadersItem;
use Brevo\Core\Types\ArrayType;

class CreateExternalFeedRequest extends JsonSerializableType
{
    /**
     * @var string $name Name of the feed
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $url URL of the external data source
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?value-of<CreateExternalFeedRequestAuthType> $authType Authentication type for accessing the feed
     */
    #[JsonProperty('authType')]
    public ?string $authType;

    /**
     * @var ?string $username Username for basic authentication (required if authType is 'basic')
     */
    #[JsonProperty('username')]
    public ?string $username;

    /**
     * @var ?string $password Password for basic authentication (required if authType is 'basic')
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $token Token for token-based authentication (required if authType is 'token')
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @var ?int $maxRetries Maximum number of retry attempts for failed requests
     */
    #[JsonProperty('maxRetries')]
    public ?int $maxRetries;

    /**
     * @var ?bool $cache Whether to cache the feed response
     */
    #[JsonProperty('cache')]
    public ?bool $cache;

    /**
     * @var ?array<CreateExternalFeedRequestHeadersItem> $headers Custom HTTP headers for the feed request
     */
    #[JsonProperty('headers'), ArrayType([CreateExternalFeedRequestHeadersItem::class])]
    public ?array $headers;

    /**
     * @param array{
     *   name: string,
     *   url: string,
     *   authType?: ?value-of<CreateExternalFeedRequestAuthType>,
     *   username?: ?string,
     *   password?: ?string,
     *   token?: ?string,
     *   maxRetries?: ?int,
     *   cache?: ?bool,
     *   headers?: ?array<CreateExternalFeedRequestHeadersItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->url = $values['url'];
        $this->authType = $values['authType'] ?? null;
        $this->username = $values['username'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->token = $values['token'] ?? null;
        $this->maxRetries = $values['maxRetries'] ?? null;
        $this->cache = $values['cache'] ?? null;
        $this->headers = $values['headers'] ?? null;
    }
}
