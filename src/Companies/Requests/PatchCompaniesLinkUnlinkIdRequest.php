<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PatchCompaniesLinkUnlinkIdRequest extends JsonSerializableType
{
    /**
     * @var ?array<int> $linkContactIds Contact ids for contacts to be linked with company
     */
    #[JsonProperty('linkContactIds'), ArrayType(['integer'])]
    public ?array $linkContactIds;

    /**
     * @var ?array<string> $linkDealsIds Deal ids for deals to be linked with company
     */
    #[JsonProperty('linkDealsIds'), ArrayType(['string'])]
    public ?array $linkDealsIds;

    /**
     * @var ?array<int> $unlinkContactIds Contact ids for contacts to be unlinked from company
     */
    #[JsonProperty('unlinkContactIds'), ArrayType(['integer'])]
    public ?array $unlinkContactIds;

    /**
     * @var ?array<string> $unlinkDealsIds Deal ids for deals to be unlinked from company
     */
    #[JsonProperty('unlinkDealsIds'), ArrayType(['string'])]
    public ?array $unlinkDealsIds;

    /**
     * @param array{
     *   linkContactIds?: ?array<int>,
     *   linkDealsIds?: ?array<string>,
     *   unlinkContactIds?: ?array<int>,
     *   unlinkDealsIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->linkContactIds = $values['linkContactIds'] ?? null;
        $this->linkDealsIds = $values['linkDealsIds'] ?? null;
        $this->unlinkContactIds = $values['unlinkContactIds'] ?? null;
        $this->unlinkDealsIds = $values['unlinkDealsIds'] ?? null;
    }
}
