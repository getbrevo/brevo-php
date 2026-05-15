<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

class LoyaltyProgram extends JsonSerializableType
{
    /**
     * @var ?string $id Loyalty Program unique identifier.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Loyalty Program name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description Loyalty Program description.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?array<string, mixed> $meta Loyalty Program metadata.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?value-of<LoyaltyProgramState> $state Current state of the loyalty program.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $subscriptionPoolId Loyalty Program subscription pool ID.
     */
    #[JsonProperty('subscriptionPoolId')]
    public ?string $subscriptionPoolId;

    /**
     * @var ?string $subscriptionGeneratorId Loyalty Program subscription generator ID.
     */
    #[JsonProperty('subscriptionGeneratorId')]
    public ?string $subscriptionGeneratorId;

    /**
     * @var ?string $pattern Subscription code pattern.
     */
    #[JsonProperty('pattern')]
    public ?string $pattern;

    /**
     * @var ?int $codeCount Number of available subscription codes.
     */
    #[JsonProperty('codeCount')]
    public ?int $codeCount;

    /**
     * @var ?string $documentId Associated document identifier.
     */
    #[JsonProperty('documentId')]
    public ?string $documentId;

    /**
     * @var ?string $birthdayAttribute Contact attribute name used for birthday tracking.
     */
    #[JsonProperty('birthdayAttribute')]
    public ?string $birthdayAttribute;

    /**
     * @var ?DateTime $createdAt Timestamp when the loyalty program was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Timestamp when the loyalty program was last modified.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     *   description?: ?string,
     *   meta?: ?array<string, mixed>,
     *   state?: ?value-of<LoyaltyProgramState>,
     *   subscriptionPoolId?: ?string,
     *   subscriptionGeneratorId?: ?string,
     *   pattern?: ?string,
     *   codeCount?: ?int,
     *   documentId?: ?string,
     *   birthdayAttribute?: ?string,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->subscriptionPoolId = $values['subscriptionPoolId'] ?? null;
        $this->subscriptionGeneratorId = $values['subscriptionGeneratorId'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
        $this->codeCount = $values['codeCount'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->birthdayAttribute = $values['birthdayAttribute'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
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
