<?php

namespace Brevo\Webhooks\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Add authentication on webhook url
 */
class UpdateWebhookRequestAuth extends JsonSerializableType
{
    /**
     * @var ?string $token Webhook authentication token
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @var ?string $type Type of authentication
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   token?: ?string,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->token = $values['token'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
