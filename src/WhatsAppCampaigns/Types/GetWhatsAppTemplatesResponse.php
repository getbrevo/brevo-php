<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWhatsAppTemplatesResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of whatsApp templates retrieved
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetWhatsAppTemplatesResponseTemplatesItem> $templates
     */
    #[JsonProperty('templates'), ArrayType([GetWhatsAppTemplatesResponseTemplatesItem::class])]
    public ?array $templates;

    /**
     * @param array{
     *   count?: ?int,
     *   templates?: ?array<GetWhatsAppTemplatesResponseTemplatesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->templates = $values['templates'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
