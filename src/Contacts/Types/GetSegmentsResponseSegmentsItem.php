<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSegmentsResponseSegmentsItem extends JsonSerializableType
{
    /**
     * @var string $categoryName Name of the Segment Category
     */
    #[JsonProperty('categoryName')]
    public string $categoryName;

    /**
     * @var int $id ID of the list
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $segmentName Name of the Segment
     */
    #[JsonProperty('segmentName')]
    public string $segmentName;

    /**
     * @var ?string $updatedAt Updation UTC date-time of the segment (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   categoryName: string,
     *   id: int,
     *   segmentName: string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->categoryName = $values['categoryName'];
        $this->id = $values['id'];
        $this->segmentName = $values['segmentName'];
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
