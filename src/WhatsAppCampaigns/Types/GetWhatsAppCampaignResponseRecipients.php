<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Recipients of the WhatsApp Campaign
 */
class GetWhatsAppCampaignResponseRecipients extends JsonSerializableType
{
    /**
     * @var ?array<int> $excludedLists List of excluded list IDs
     */
    #[JsonProperty('excludedLists'), ArrayType(['integer'])]
    public ?array $excludedLists;

    /**
     * @var ?array<int> $includedLists List of included list IDs
     */
    #[JsonProperty('includedLists'), ArrayType(['integer'])]
    public ?array $includedLists;

    /**
     * @var ?array<int> $segments List of segment IDs
     */
    #[JsonProperty('segments'), ArrayType(['integer'])]
    public ?array $segments;

    /**
     * @var ?string $type Type of recipients (list or segment)
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   excludedLists?: ?array<int>,
     *   includedLists?: ?array<int>,
     *   segments?: ?array<int>,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->excludedLists = $values['excludedLists'] ?? null;
        $this->includedLists = $values['includedLists'] ?? null;
        $this->segments = $values['segments'] ?? null;
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
