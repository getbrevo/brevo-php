<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * File data that is uploaded
 */
class FileData extends JsonSerializableType
{
    /**
     * @var ?string $id Unique file id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Name of uploaded file
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $authorId Account id of user which created the file
     */
    #[JsonProperty('authorId')]
    public ?string $authorId;

    /**
     * @var ?int $contactId Contact id of contact on which file is uploaded
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $dealId Deal id linked to a file
     */
    #[JsonProperty('dealId')]
    public ?string $dealId;

    /**
     * @var ?string $companyId Company id linked to a file
     */
    #[JsonProperty('companyId')]
    public ?string $companyId;

    /**
     * @var ?int $size Size of file in bytes
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @var ?DateTime $createdAt File created date/time
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     *   authorId?: ?string,
     *   contactId?: ?int,
     *   dealId?: ?string,
     *   companyId?: ?string,
     *   size?: ?int,
     *   createdAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->authorId = $values['authorId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->dealId = $values['dealId'] ?? null;
        $this->companyId = $values['companyId'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
