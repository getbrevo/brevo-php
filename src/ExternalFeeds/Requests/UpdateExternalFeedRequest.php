<?php

namespace Brevo\ExternalFeeds\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\ExternalFeeds\Types\UpdateExternalFeedRequestAuthType;
use Brevo\ExternalFeeds\Types\UpdateExternalFeedRequestHeadersItem;
use Brevo\Core\Types\ArrayType;

class UpdateExternalFeedRequest extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the feed
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $url URL of the external data source
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?value-of<UpdateExternalFeedRequestAuthType> $authType Authentication type for accessing the feed
     */
    #[JsonProperty('authType')]
    public ?string $authType;

    /**
     * @var ?string $username Username for basic authentication
     */
    #[JsonProperty('username')]
    public ?string $username;

    /**
     * @var ?string $password Password for basic authentication
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $token Token for token-based authentication
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @var ?array<UpdateExternalFeedRequestHeadersItem> $headers Custom HTTP headers for the feed request
     */
    #[JsonProperty('headers'), ArrayType([UpdateExternalFeedRequestHeadersItem::class])]
    public ?array $headers;

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
     * @param array{
     *   name?: ?string,
     *   url?: ?string,
     *   authType?: ?value-of<UpdateExternalFeedRequestAuthType>,
     *   username?: ?string,
     *   password?: ?string,
     *   token?: ?string,
     *   headers?: ?array<UpdateExternalFeedRequestHeadersItem>,
     *   maxRetries?: ?int,
     *   cache?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->authType = $values['authType'] ?? null;
        $this->username = $values['username'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->token = $values['token'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->maxRetries = $values['maxRetries'] ?? null;
        $this->cache = $values['cache'] ?? null;
    }
}
