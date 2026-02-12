<?php

namespace Brevo\WhatsAppCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppTemplateRequestCategory;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppTemplateRequestSource;

class CreateWhatsAppTemplateRequest extends JsonSerializableType
{
    /**
     * @var string $bodyText Body of the template. **Maximum allowed characters are 1024**
     */
    #[JsonProperty('bodyText')]
    public string $bodyText;

    /**
     * @var value-of<CreateWhatsAppTemplateRequestCategory> $category Category of the template
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var ?string $headerText Text content of the header in the template.  **Maximum allowed characters are 45** **Use this field to add text content in template header and if mediaUrl is empty**
     */
    #[JsonProperty('headerText')]
    public ?string $headerText;

    /**
     * Language of the template. For Example :
     * **en** for English
     *
     * @var string $language
     */
    #[JsonProperty('language')]
    public string $language;

    /**
     * @var ?string $mediaUrl Absolute url of the media file **(no local file)** for the header. **Use this field in you want to add media in Template header and headerText is empty** Allowed extensions for media files are: #### jpeg | png | mp4 | pdf
     */
    #[JsonProperty('mediaUrl')]
    public ?string $mediaUrl;

    /**
     * @var string $name Name of the template
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<CreateWhatsAppTemplateRequestSource> $source source of the template
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   bodyText: string,
     *   category: value-of<CreateWhatsAppTemplateRequestCategory>,
     *   language: string,
     *   name: string,
     *   headerText?: ?string,
     *   mediaUrl?: ?string,
     *   source?: ?value-of<CreateWhatsAppTemplateRequestSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bodyText = $values['bodyText'];
        $this->category = $values['category'];
        $this->headerText = $values['headerText'] ?? null;
        $this->language = $values['language'];
        $this->mediaUrl = $values['mediaUrl'] ?? null;
        $this->name = $values['name'];
        $this->source = $values['source'] ?? null;
    }
}
