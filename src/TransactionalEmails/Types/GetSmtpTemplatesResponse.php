<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetSmtpTemplateOverview;
use Brevo\Core\Types\ArrayType;

class GetSmtpTemplatesResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Count of transactional email templates
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetSmtpTemplateOverview> $templates
     */
    #[JsonProperty('templates'), ArrayType([GetSmtpTemplateOverview::class])]
    public ?array $templates;

    /**
     * @param array{
     *   count?: ?int,
     *   templates?: ?array<GetSmtpTemplateOverview>,
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
