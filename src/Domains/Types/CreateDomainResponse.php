<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateDomainResponse extends JsonSerializableType
{
    /**
     * @var int $id ID of the Domain created
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $domainName Domain name
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var ?string $domainProvider Detected domain provider
     */
    #[JsonProperty('domain_provider')]
    public ?string $domainProvider;

    /**
     * @var string $message Success message with next steps
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?CreateDomainResponseDnsRecords $dnsRecords DNS records required for domain authentication
     */
    #[JsonProperty('dns_records')]
    public ?CreateDomainResponseDnsRecords $dnsRecords;

    /**
     * @param array{
     *   id: int,
     *   domainName: string,
     *   message: string,
     *   domainProvider?: ?string,
     *   dnsRecords?: ?CreateDomainResponseDnsRecords,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->domainName = $values['domainName'];
        $this->domainProvider = $values['domainProvider'] ?? null;
        $this->message = $values['message'];
        $this->dnsRecords = $values['dnsRecords'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
