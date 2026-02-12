<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class LoyaltyProgram extends JsonSerializableType
{
    /**
     * @var ?int $codeCount Loyalty Program code count
     */
    #[JsonProperty('codeCount')]
    public ?int $codeCount;

    /**
     * @var ?string $createdAt Loyalty Program creation date
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $description Loyalty Program description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $documentId string
     */
    #[JsonProperty('documentId')]
    public ?string $documentId;

    /**
     * @var ?string $id Loyalty Program ID
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?array<string, mixed> $meta Loyalty Program meta data
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $name Loyalty Program name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $pattern string
     */
    #[JsonProperty('pattern')]
    public ?string $pattern;

    /**
     * @var ?value-of<LoyaltyProgramState> $state Loyalty Program state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $subscriptionGeneratorId Loyalty Program subscription generator ID
     */
    #[JsonProperty('subscriptionGeneratorId')]
    public ?string $subscriptionGeneratorId;

    /**
     * @var ?string $subscriptionPoolId Loyalty Program subscription pool ID
     */
    #[JsonProperty('subscriptionPoolId')]
    public ?string $subscriptionPoolId;

    /**
     * @var ?string $updatedAt Loyalty Program last modification date
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @param array{
     *   codeCount?: ?int,
     *   createdAt?: ?string,
     *   description?: ?string,
     *   documentId?: ?string,
     *   id?: ?string,
     *   meta?: ?array<string, mixed>,
     *   name?: ?string,
     *   pattern?: ?string,
     *   state?: ?value-of<LoyaltyProgramState>,
     *   subscriptionGeneratorId?: ?string,
     *   subscriptionPoolId?: ?string,
     *   updatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->codeCount = $values['codeCount'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->subscriptionGeneratorId = $values['subscriptionGeneratorId'] ?? null;
        $this->subscriptionPoolId = $values['subscriptionPoolId'] ?? null;
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
