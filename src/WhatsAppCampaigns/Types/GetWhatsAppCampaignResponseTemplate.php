<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\VariablesItems;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWhatsAppCampaignResponseTemplate extends JsonSerializableType
{
    /**
     * @var ?array<VariablesItems> $bodyVariables array of variables item variables
     */
    #[JsonProperty('body_variables'), ArrayType([VariablesItems::class])]
    public ?array $bodyVariables;

    /**
     * @var ?string $buttonType
     */
    #[JsonProperty('button_type')]
    public ?string $buttonType;

    /**
     * @var ?string $category description of the template
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?array<GetWhatsAppCampaignResponseTemplateComponentsItem> $components array of component item objects
     */
    #[JsonProperty('components'), ArrayType([GetWhatsAppCampaignResponseTemplateComponentsItem::class])]
    public ?array $components;

    /**
     * @var ?bool $containsButton
     */
    #[JsonProperty('contains_button')]
    public ?bool $containsButton;

    /**
     * @var ?bool $displayHeader
     */
    #[JsonProperty('display_header')]
    public ?bool $displayHeader;

    /**
     * @var ?string $headerType type of header
     */
    #[JsonProperty('header_type')]
    public ?string $headerType;

    /**
     * @var ?array<VariablesItems> $headerVariables array of variables item object
     */
    #[JsonProperty('header_variables'), ArrayType([VariablesItems::class])]
    public ?array $headerVariables;

    /**
     * @var ?bool $hideFooter
     */
    #[JsonProperty('hide_footer')]
    public ?bool $hideFooter;

    /**
     * @var ?string $language language of the template
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?string $name name of the template
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   bodyVariables?: ?array<VariablesItems>,
     *   buttonType?: ?string,
     *   category?: ?string,
     *   components?: ?array<GetWhatsAppCampaignResponseTemplateComponentsItem>,
     *   containsButton?: ?bool,
     *   displayHeader?: ?bool,
     *   headerType?: ?string,
     *   headerVariables?: ?array<VariablesItems>,
     *   hideFooter?: ?bool,
     *   language?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bodyVariables = $values['bodyVariables'] ?? null;
        $this->buttonType = $values['buttonType'] ?? null;
        $this->category = $values['category'] ?? null;
        $this->components = $values['components'] ?? null;
        $this->containsButton = $values['containsButton'] ?? null;
        $this->displayHeader = $values['displayHeader'] ?? null;
        $this->headerType = $values['headerType'] ?? null;
        $this->headerVariables = $values['headerVariables'] ?? null;
        $this->hideFooter = $values['hideFooter'] ?? null;
        $this->language = $values['language'] ?? null;
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
