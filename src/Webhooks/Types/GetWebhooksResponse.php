<?php

namespace Brevo\Webhooks\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\GetWebhook;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWebhooksResponse extends JsonSerializableType
{
    /**
     * @var array<GetWebhook> $webhooks
     */
    #[JsonProperty('webhooks'), ArrayType([GetWebhook::class])]
    public array $webhooks;

    /**
     * @param array{
     *   webhooks: array<GetWebhook>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->webhooks = $values['webhooks'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
