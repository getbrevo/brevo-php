<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * DMARC policy record
 */
class CreateDomainResponseDnsRecordsDmarcRecord extends JsonSerializableType
{
    /**
     * @var string $hostName DNS record hostname
     */
    #[JsonProperty('host_name')]
    public string $hostName;

    /**
     * @var string $type DNS record type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $value DNS record value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var bool $status Whether the record is properly configured
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @param array{
     *   hostName: string,
     *   type: string,
     *   value: string,
     *   status: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->hostName = $values['hostName'];
        $this->type = $values['type'];
        $this->value = $values['value'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
