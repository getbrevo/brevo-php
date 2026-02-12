<?php

namespace Brevo\Deals\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PatchCrmDealsLinkUnlinkIdRequest extends JsonSerializableType
{
    /**
     * @var ?array<string> $linkCompanyIds Company ids to be linked with deal
     */
    #[JsonProperty('linkCompanyIds'), ArrayType(['string'])]
    public ?array $linkCompanyIds;

    /**
     * @var ?array<int> $linkContactIds Contact ids for contacts to be linked with deal
     */
    #[JsonProperty('linkContactIds'), ArrayType(['integer'])]
    public ?array $linkContactIds;

    /**
     * @var ?array<string> $unlinkCompanyIds Company ids to be unlinked from deal
     */
    #[JsonProperty('unlinkCompanyIds'), ArrayType(['string'])]
    public ?array $unlinkCompanyIds;

    /**
     * @var ?array<int> $unlinkContactIds Contact ids for contacts to be unlinked from deal
     */
    #[JsonProperty('unlinkContactIds'), ArrayType(['integer'])]
    public ?array $unlinkContactIds;

    /**
     * @param array{
     *   linkCompanyIds?: ?array<string>,
     *   linkContactIds?: ?array<int>,
     *   unlinkCompanyIds?: ?array<string>,
     *   unlinkContactIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->linkCompanyIds = $values['linkCompanyIds'] ?? null;
        $this->linkContactIds = $values['linkContactIds'] ?? null;
        $this->unlinkCompanyIds = $values['unlinkCompanyIds'] ?? null;
        $this->unlinkContactIds = $values['unlinkContactIds'] ?? null;
    }
}
