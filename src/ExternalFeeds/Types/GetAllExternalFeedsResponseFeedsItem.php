<?php

namespace Brevo\ExternalFeeds\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class GetAllExternalFeedsResponseFeedsItem extends JsonSerializableType
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
     * @var string $alias URL-friendly alias for the feed
     */
    #[JsonProperty('alias')]
    public string $alias;

    /**
     * @var string $url URL of the external data source
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var value-of<GetAllExternalFeedsResponseFeedsItemAuthType> $authType Authentication type for accessing the feed
     */
    #[JsonProperty('authType')]
    public string $authType;

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
     * @var bool $isInternal Whether this is an internal Brevo system feed
     */
    #[JsonProperty('isInternal')]
    public bool $isInternal;

    /**
     * @var ?array<GetAllExternalFeedsResponseFeedsItemHeadersItem> $headers Custom HTTP headers for the feed request
     */
    #[JsonProperty('headers'), ArrayType([GetAllExternalFeedsResponseFeedsItemHeadersItem::class])]
    public ?array $headers;

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
     *   alias: string,
     *   url: string,
     *   authType: value-of<GetAllExternalFeedsResponseFeedsItemAuthType>,
     *   maxRetries: int,
     *   cache: bool,
     *   isInternal: bool,
     *   createdAt: DateTime,
     *   modifiedAt: DateTime,
     *   username?: ?string,
     *   password?: ?string,
     *   token?: ?string,
     *   headers?: ?array<GetAllExternalFeedsResponseFeedsItemHeadersItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->alias = $values['alias'];
        $this->url = $values['url'];
        $this->authType = $values['authType'];
        $this->username = $values['username'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->token = $values['token'] ?? null;
        $this->maxRetries = $values['maxRetries'];
        $this->cache = $values['cache'];
        $this->isInternal = $values['isInternal'];
        $this->headers = $values['headers'] ?? null;
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
