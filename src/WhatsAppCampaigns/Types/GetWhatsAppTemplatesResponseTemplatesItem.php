<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetWhatsAppTemplatesResponseTemplatesItem extends JsonSerializableType
{
    /**
     * @var string $category category of the template
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $createdAt Creation UTC date-time of the whatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $errorReason Error reason in the template creation
     */
    #[JsonProperty('errorReason')]
    public ?string $errorReason;

    /**
     * @var int $id ID of the whatsApp template
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $language Language in which template exists
     */
    #[JsonProperty('language')]
    public string $language;

    /**
     * @var string $modifiedAt UTC date-time of last modification of the whatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var string $name Name of the whatsApp template
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $status Status of the whatsApp template
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   category: string,
     *   createdAt: string,
     *   id: int,
     *   language: string,
     *   modifiedAt: string,
     *   name: string,
     *   status: string,
     *   errorReason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->createdAt = $values['createdAt'];
        $this->errorReason = $values['errorReason'] ?? null;
        $this->id = $values['id'];
        $this->language = $values['language'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->name = $values['name'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
