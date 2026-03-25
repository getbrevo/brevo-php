<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Companies\Types\PatchCrmAttributesIdRequestOptionsLabelsItem;
use Brevo\Core\Types\ArrayType;
use Brevo\Companies\Types\PatchCrmAttributesIdRequestObjectType;

class PatchCrmAttributesIdRequest extends JsonSerializableType
{
    /**
     * @var ?string $label Attribute display label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?array<PatchCrmAttributesIdRequestOptionsLabelsItem> $optionsLabels Updated labels for selectable options
     */
    #[JsonProperty('optionsLabels'), ArrayType([PatchCrmAttributesIdRequestOptionsLabelsItem::class])]
    public ?array $optionsLabels;

    /**
     * @var ?value-of<PatchCrmAttributesIdRequestObjectType> $objectType The type of object the attribute belongs to, it cannot be updated after creation
     */
    #[JsonProperty('objectType')]
    public ?string $objectType;

    /**
     * @param array{
     *   label?: ?string,
     *   optionsLabels?: ?array<PatchCrmAttributesIdRequestOptionsLabelsItem>,
     *   objectType?: ?value-of<PatchCrmAttributesIdRequestObjectType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->label = $values['label'] ?? null;
        $this->optionsLabels = $values['optionsLabels'] ?? null;
        $this->objectType = $values['objectType'] ?? null;
    }
}
