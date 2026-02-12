<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetDomainsResponseDomainsItem extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier of the domain
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $domainName Domain name
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * Status of domain authentication (true=authenticated,
     * false=non authenticated)
     *
     * @var bool $authenticated
     */
    #[JsonProperty('authenticated')]
    public bool $authenticated;

    /**
     * Status of domain verification (true=verified, false=non
     * verified)
     *
     * @var bool $verified
     */
    #[JsonProperty('verified')]
    public bool $verified;

    /**
     * @var ?string $ip Dedicated IP associated with domain (null if none)
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var string $provider DNS provider for the domain
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var GetDomainsResponseDomainsItemCreator $creator Information about who created the domain
     */
    #[JsonProperty('creator')]
    public GetDomainsResponseDomainsItemCreator $creator;

    /**
     * @param array{
     *   id: string,
     *   domainName: string,
     *   authenticated: bool,
     *   verified: bool,
     *   provider: string,
     *   creator: GetDomainsResponseDomainsItemCreator,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->domainName = $values['domainName'];
        $this->authenticated = $values['authenticated'];
        $this->verified = $values['verified'];
        $this->ip = $values['ip'] ?? null;
        $this->provider = $values['provider'];
        $this->creator = $values['creator'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
