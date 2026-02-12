<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class AuthenticateDomainResponse extends JsonSerializableType
{
    /**
     * @var string $domainName Domain name that was authenticated
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var string $message Success message confirming authentication
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   domainName: string,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domainName = $values['domainName'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
