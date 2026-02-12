<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * DNS records configuration and status
 */
class GetDomainConfigurationResponseDnsRecords extends JsonSerializableType
{
    /**
     * @var GetDomainConfigurationResponseDnsRecordsBrevoCode $brevoCode Brevo verification code record
     */
    #[JsonProperty('brevo_code')]
    public GetDomainConfigurationResponseDnsRecordsBrevoCode $brevoCode;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDkimRecord $dkimRecord DKIM authentication record
     */
    #[JsonProperty('dkim_record')]
    public GetDomainConfigurationResponseDnsRecordsDkimRecord $dkimRecord;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDmarcRecord $dmarcRecord DMARC policy record
     */
    #[JsonProperty('dmarc_record')]
    public GetDomainConfigurationResponseDnsRecordsDmarcRecord $dmarcRecord;

    /**
     * @param array{
     *   brevoCode: GetDomainConfigurationResponseDnsRecordsBrevoCode,
     *   dkimRecord: GetDomainConfigurationResponseDnsRecordsDkimRecord,
     *   dmarcRecord: GetDomainConfigurationResponseDnsRecordsDmarcRecord,
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
