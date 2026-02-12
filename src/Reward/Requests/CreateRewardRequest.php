<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateRewardRequest extends JsonSerializableType
{
    /**
     * @var string $name Internal name of the reward
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $publicDescription Public facing description of the reward
     */
    #[JsonProperty('publicDescription')]
    public ?string $publicDescription;

    /**
     * @var ?string $publicImage URL of the public image for the reward
     */
    #[JsonProperty('publicImage')]
    public ?string $publicImage;

    /**
     * @var ?string $publicName Public facing name of the reward
     */
    #[JsonProperty('publicName')]
    public ?string $publicName;

    /**
     * @param array{
     *   name: string,
     *   publicDescription?: ?string,
     *   publicImage?: ?string,
     *   publicName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->publicDescription = $values['publicDescription'] ?? null;
        $this->publicImage = $values['publicImage'] ?? null;
        $this->publicName = $values['publicName'] ?? null;
    }
}
