<?php

namespace Brevo\ExternalFeeds\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class GetExternalFeedByUuidResponse extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier of the feed
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var value-of<GetExternalFeedByUuidResponseAuthType> $authType Authentication type for accessing the feed
     */
    #[JsonProperty('authType')]
    public string $authType;

    /**
     * @var ?string $username Username for basic authentication. Only returned when authType is 'basic'. Excluded from response when authType is 'token'.
     */
    #[JsonProperty('username')]
    public ?string $username;

    /**
     * @var ?string $password Password for basic authentication. Only returned when authType is 'basic'. Excluded from response when authType is 'token'.
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $token Token for token-based authentication. Only returned when authType is 'token'. Excluded from response when authType is 'basic' or 'noAuth'.
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @var ?array<GetExternalFeedByUuidResponseHeadersItem> $headers Custom HTTP headers for the feed request
     */
    #[JsonProperty('headers'), ArrayType([GetExternalFeedByUuidResponseHeadersItem::class])]
    public ?array $headers;

    /**
     * @var int $maxRetries Maximum number of retry attempts for failed requests
     */
    #[JsonProperty('maxRetries')]
    public int $maxRetries;

    /**
     * @var bool $cache Whether to cache the feed response
     */
    #[JsonProperty('cache')]
    public bool $cache;

    /**
     * @var DateTime $createdAt Feed creation timestamp
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $modifiedAt Feed last modification timestamp
     */
    #[JsonProperty('modifiedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $modifiedAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   url: string,
     *   authType: value-of<GetExternalFeedByUuidResponseAuthType>,
     *   maxRetries: int,
     *   cache: bool,
     *   createdAt: DateTime,
     *   modifiedAt: DateTime,
     *   username?: ?string,
     *   password?: ?string,
     *   token?: ?string,
     *   headers?: ?array<GetExternalFeedByUuidResponseHeadersItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->url = $values['url'];
        $this->authType = $values['authType'];
        $this->username = $values['username'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->token = $values['token'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->maxRetries = $values['maxRetries'];
        $this->cache = $values['cache'];
        $this->createdAt = $values['createdAt'];
        $this->modifiedAt = $values['modifiedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
