<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * List of stages
 */
class Pipeline extends JsonSerializableType
{
    /**
     * @var ?string $pipeline Pipeline id
     */
    #[JsonProperty('pipeline')]
    public ?string $pipeline;

    /**
     * @var ?string $pipelineName Pipeline Name
     */
    #[JsonProperty('pipeline_name')]
    public ?string $pipelineName;

    /**
     * @var ?array<PipelineStagesItem> $stages List of stages
     */
    #[JsonProperty('stages'), ArrayType([PipelineStagesItem::class])]
    public ?array $stages;

    /**
     * @param array{
     *   pipeline?: ?string,
     *   pipelineName?: ?string,
     *   stages?: ?array<PipelineStagesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->pipeline = $values['pipeline'] ?? null;
        $this->pipelineName = $values['pipelineName'] ?? null;
        $this->stages = $values['stages'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
