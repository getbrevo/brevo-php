<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Set the filter for the contacts to be exported.
 */
class RequestContactExportRequestCustomContactFilter extends JsonSerializableType
{
    /**
     * @var ?value-of<RequestContactExportRequestCustomContactFilterActionForContacts> $actionForContacts **Mandatory if neither actionForEmailCampaigns nor actionForSmsCampaigns is passed.** This will export the contacts on the basis of provided action applied on contacts as per the list id. * **allContacts** - Fetch the list of all contacts for a particular list. * **subscribed & unsubscribed** - Fetch the list of subscribed / unsubscribed (blacklisted via any means) contacts for a particular list. * **unsubscribedPerList** - Fetch the list of contacts that are unsubscribed from a particular list only.
     */
    #[JsonProperty('actionForContacts')]
    public ?string $actionForContacts;

    /**
     * @var ?value-of<RequestContactExportRequestCustomContactFilterActionForEmailCampaigns> $actionForEmailCampaigns **Mandatory if neither actionForContacts nor actionForSmsCampaigns is passed.** This will export the contacts on the basis of provided action applied on email campaigns. * **openers & nonOpeners** - emailCampaignId is mandatory. Fetch the list of readers / non-readers for a particular email campaign. * **clickers & nonClickers** - emailCampaignId is mandatory. Fetch the list of clickers / non-clickers for a particular email campaign. * **unsubscribed** - emailCampaignId is mandatory. Fetch the list of all unsubscribed (blacklisted via any means) contacts for a particular email campaign. * **hardBounces & softBounces** - emailCampaignId is optional. Fetch the list of hard bounces / soft bounces for a particular / all email campaign(s).
     */
    #[JsonProperty('actionForEmailCampaigns')]
    public ?string $actionForEmailCampaigns;

    /**
     * @var ?value-of<RequestContactExportRequestCustomContactFilterActionForSmsCampaigns> $actionForSmsCampaigns **Mandatory if neither actionForContacts nor actionForEmailCampaigns is passed.** This will export the contacts on the basis of provided action applied on sms campaigns. * **unsubscribed** - Fetch the list of all unsubscribed (blacklisted via any means) contacts for all / particular sms campaigns. * **hardBounces & softBounces** - Fetch the list of hard bounces / soft bounces for all / particular sms campaigns.
     */
    #[JsonProperty('actionForSmsCampaigns')]
    public ?string $actionForSmsCampaigns;

    /**
     * @var ?int $emailCampaignId Considered only if **actionForEmailCampaigns** is passed, ignored otherwise. **Mandatory if action is one of the following - openers, nonOpeners, clickers, nonClickers, unsubscribed.** The id of the email campaign for which the corresponding action shall be applied in the filter.
     */
    #[JsonProperty('emailCampaignId')]
    public ?int $emailCampaignId;

    /**
     * @var ?int $listId ID of the list. This is mandatory if actionForContacts is specified and segmentId is not provided. Either segmentId or listId must be included.
     */
    #[JsonProperty('listId')]
    public ?int $listId;

    /**
     * @var ?int $segmentId ID of the segment. This is mandatory if actionForContacts is specified and listId is not provided. Either segmentId or listId must be included.
     */
    #[JsonProperty('segmentId')]
    public ?int $segmentId;

    /**
     * @var ?int $smsCampaignId Considered only if **actionForSmsCampaigns** is passed, ignored otherwise. The id of sms campaign for which the corresponding action shall be applied in the filter.
     */
    #[JsonProperty('smsCampaignId')]
    public ?int $smsCampaignId;

    /**
     * @param array{
     *   actionForContacts?: ?value-of<RequestContactExportRequestCustomContactFilterActionForContacts>,
     *   actionForEmailCampaigns?: ?value-of<RequestContactExportRequestCustomContactFilterActionForEmailCampaigns>,
     *   actionForSmsCampaigns?: ?value-of<RequestContactExportRequestCustomContactFilterActionForSmsCampaigns>,
     *   emailCampaignId?: ?int,
     *   listId?: ?int,
     *   segmentId?: ?int,
     *   smsCampaignId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->actionForContacts = $values['actionForContacts'] ?? null;
        $this->actionForEmailCampaigns = $values['actionForEmailCampaigns'] ?? null;
        $this->actionForSmsCampaigns = $values['actionForSmsCampaigns'] ?? null;
        $this->emailCampaignId = $values['emailCampaignId'] ?? null;
        $this->listId = $values['listId'] ?? null;
        $this->segmentId = $values['segmentId'] ?? null;
        $this->smsCampaignId = $values['smsCampaignId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
