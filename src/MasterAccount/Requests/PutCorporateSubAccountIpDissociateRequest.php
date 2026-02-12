<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PutCorporateSubAccountIpDissociateRequest extends JsonSerializableType
{
    /**
     * Pass the list of sub-account Ids to be dissociated from the IP
     * address
     *
     * @var array<int> $ids
     */
    #[JsonProperty('ids'), ArrayType(['integer'])]
    public array $ids;

    /**
     * @var string $ip IP address
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @param array{
     *   ids: array<int>,
     *   ip: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ids = $values['ids'];
        $this->ip = $values['ip'];
    }
}
