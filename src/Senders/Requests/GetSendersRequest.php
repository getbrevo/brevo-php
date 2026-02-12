<?php

namespace Brevo\Senders\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetSendersRequest extends JsonSerializableType
{
    /**
     * @var ?string $ip Filter your senders for a specific ip. **Available for dedicated IP usage only**
     */
    public ?string $ip;

    /**
     * @var ?string $domain Filter your senders for a specific domain
     */
    public ?string $domain;

    /**
     * @param array{
     *   ip?: ?string,
     *   domain?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->domain = $values['domain'] ?? null;
    }
}
