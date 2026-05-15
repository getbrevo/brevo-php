<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmsCampaignResponseRecipientsExclusionListsItem extends JsonSerializableType
{
    /**
     * @var ?int $id ID of the exclusion list
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Name of the exclusion list
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   id?: ?int,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
