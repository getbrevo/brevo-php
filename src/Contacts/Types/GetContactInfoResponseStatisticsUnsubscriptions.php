<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Listing of the unsubscription for the contact
 */
class GetContactInfoResponseStatisticsUnsubscriptions extends JsonSerializableType
{
    /**
     * @var array<GetContactInfoResponseStatisticsUnsubscriptionsAdminUnsubscriptionItem> $adminUnsubscription Contact has been unsubscribed from the administrator
     */
    #[JsonProperty('adminUnsubscription'), ArrayType([GetContactInfoResponseStatisticsUnsubscriptionsAdminUnsubscriptionItem::class])]
    public array $adminUnsubscription;

    /**
     * @var array<GetContactInfoResponseStatisticsUnsubscriptionsUserUnsubscriptionItem> $userUnsubscription Contact unsubscribe via unsubscription link in a campaign
     */
    #[JsonProperty('userUnsubscription'), ArrayType([GetContactInfoResponseStatisticsUnsubscriptionsUserUnsubscriptionItem::class])]
    public array $userUnsubscription;

    /**
     * @param array{
     *   adminUnsubscription: array<GetContactInfoResponseStatisticsUnsubscriptionsAdminUnsubscriptionItem>,
     *   userUnsubscription: array<GetContactInfoResponseStatisticsUnsubscriptionsUserUnsubscriptionItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->adminUnsubscription = $values['adminUnsubscription'];
        $this->userUnsubscription = $values['userUnsubscription'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
