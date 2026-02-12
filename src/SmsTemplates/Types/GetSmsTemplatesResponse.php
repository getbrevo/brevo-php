<?php

namespace Brevo\SmsTemplates\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSmsTemplatesResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Count of transactional sms templates
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetSmsTemplatesResponseTemplatesItem> $templates
     */
    #[JsonProperty('templates'), ArrayType([GetSmsTemplatesResponseTemplatesItem::class])]
    public ?array $templates;

    /**
     * @param array{
     *   count?: ?int,
     *   templates?: ?array<GetSmsTemplatesResponseTemplatesItem>,
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
