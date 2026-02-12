<?php

namespace Brevo\SmsTemplates\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Manage US compliance
 */
class GetSmsTemplatesResponseTemplatesItemCompliance extends JsonSerializableType
{
    /**
     * @var ?bool $complianceToggle US compliance is enabled.
     */
    #[JsonProperty('compliance_toggle')]
    public ?bool $complianceToggle;

    /**
     * @var ?string $organisationPrefix A recognizable prefix will ensure your audience knows who you are. Recommended by the U.S. carriers.
     */
    #[JsonProperty('organisation_prefix')]
    public ?string $organisationPrefix;

    /**
     * @var ?string $stopKeyword Instructions to unsubscribe from future communications. Must include STOP keyword.
     */
    #[JsonProperty('stop_keyword')]
    public ?string $stopKeyword;

    /**
     * @param array{
     *   complianceToggle?: ?bool,
     *   organisationPrefix?: ?string,
     *   stopKeyword?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->complianceToggle = $values['complianceToggle'] ?? null;
        $this->organisationPrefix = $values['organisationPrefix'] ?? null;
        $this->stopKeyword = $values['stopKeyword'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
