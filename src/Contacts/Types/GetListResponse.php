<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetListResponse extends JsonSerializableType
{
    /**
     * @var int $id ID of the list
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Name of the list
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $totalBlacklisted Number of blacklisted contacts in the list
     */
    #[JsonProperty('totalBlacklisted')]
    public int $totalBlacklisted;

    /**
     * @var int $totalSubscribers Number of contacts in the list
     */
    #[JsonProperty('totalSubscribers')]
    public int $totalSubscribers;

    /**
     * @var int $uniqueSubscribers Number of unique contacts in the list
     */
    #[JsonProperty('uniqueSubscribers')]
    public int $uniqueSubscribers;

    /**
     * @var ?array<GetListResponseCampaignStatsItem> $campaignStats
     */
    #[JsonProperty('campaignStats'), ArrayType([GetListResponseCampaignStatsItem::class])]
    public ?array $campaignStats;

    /**
     * @var string $createdAt Creation UTC date-time of the list (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?bool $dynamicList Status telling if the list is dynamic or not (true=dynamic, false=not dynamic)
     */
    #[JsonProperty('dynamicList')]
    public ?bool $dynamicList;

    /**
     * @var int $folderId ID of the folder
     */
    #[JsonProperty('folderId')]
    public int $folderId;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     *   totalBlacklisted: int,
     *   totalSubscribers: int,
     *   uniqueSubscribers: int,
     *   createdAt: string,
     *   folderId: int,
     *   campaignStats?: ?array<GetListResponseCampaignStatsItem>,
     *   dynamicList?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->totalBlacklisted = $values['totalBlacklisted'];
        $this->totalSubscribers = $values['totalSubscribers'];
        $this->uniqueSubscribers = $values['uniqueSubscribers'];
        $this->campaignStats = $values['campaignStats'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->dynamicList = $values['dynamicList'] ?? null;
        $this->folderId = $values['folderId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
