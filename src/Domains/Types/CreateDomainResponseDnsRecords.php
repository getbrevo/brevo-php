<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * DNS records required for domain authentication
 */
class CreateDomainResponseDnsRecords extends JsonSerializableType
{
    /**
     * @var CreateDomainResponseDnsRecordsBrevoCode $brevoCode Brevo verification code record
     */
    #[JsonProperty('brevo_code')]
    public CreateDomainResponseDnsRecordsBrevoCode $brevoCode;

    /**
     * @var CreateDomainResponseDnsRecordsDkimRecord $dkimRecord DKIM authentication record
     */
    #[JsonProperty('dkim_record')]
    public CreateDomainResponseDnsRecordsDkimRecord $dkimRecord;

    /**
     * @var CreateDomainResponseDnsRecordsDmarcRecord $dmarcRecord DMARC policy record
     */
    #[JsonProperty('dmarc_record')]
    public CreateDomainResponseDnsRecordsDmarcRecord $dmarcRecord;

    /**
     * @param array{
     *   brevoCode: CreateDomainResponseDnsRecordsBrevoCode,
     *   dkimRecord: CreateDomainResponseDnsRecordsDkimRecord,
     *   dmarcRecord: CreateDomainResponseDnsRecordsDmarcRecord,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->brevoCode = $values['brevoCode'];
        $this->dkimRecord = $values['dkimRecord'];
        $this->dmarcRecord = $values['dmarcRecord'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
