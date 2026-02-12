<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * Information about who created the domain
 */
class GetDomainsResponseDomainsItemCreator extends JsonSerializableType
{
    /**
     * @var string $id Creator's user ID
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $email Creator's email address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var DateTime $creationDate Domain creation date
     */
    #[JsonProperty('creationDate'), Date(Date::TYPE_DATETIME)]
    public DateTime $creationDate;

    /**
     * @param array{
     *   id: string,
     *   email: string,
     *   creationDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->email = $values['email'];
        $this->creationDate = $values['creationDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
