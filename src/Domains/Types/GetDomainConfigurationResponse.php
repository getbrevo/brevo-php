<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetDomainConfigurationResponse extends JsonSerializableType
{
    /**
     * @var string $domain Domain name
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * Status of domain verification (true=verified, false=non
     * verified)
     *
     * @var bool $verified
     */
    #[JsonProperty('verified')]
    public bool $verified;

    /**
     * Status of domain authentication (true=authenticated, false=non
     * authenticated)
     *
     * @var bool $authenticated
     */
    #[JsonProperty('authenticated')]
    public bool $authenticated;

    /**
     * @var GetDomainConfigurationResponseDnsRecords $dnsRecords DNS records configuration and status
     */
    #[JsonProperty('dns_records')]
    public GetDomainConfigurationResponseDnsRecords $dnsRecords;

    /**
     * @param array{
     *   domain: string,
     *   verified: bool,
     *   authenticated: bool,
     *   dnsRecords: GetDomainConfigurationResponseDnsRecords,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
        $this->verified = $values['verified'];
        $this->authenticated = $values['authenticated'];
        $this->dnsRecords = $values['dnsRecords'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
