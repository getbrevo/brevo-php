<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCampaignStats extends JsonSerializableType
{
    /**
     * @var ?int $appleMppOpens Numbers of times your email has been opened automatically through Apple MPP.
     */
    #[JsonProperty('appleMppOpens')]
    public ?int $appleMppOpens;

    /**
     * @var ?int $clickers Number of total clicks for the campaign
     */
    #[JsonProperty('clickers')]
    public ?int $clickers;

    /**
     * @var ?int $complaints Number of complaints (Spam reports) for the campaign
     */
    #[JsonProperty('complaints')]
    public ?int $complaints;

    /**
     * @var ?int $deferred Number of deferred emails for the campaign
     */
    #[JsonProperty('deferred')]
    public ?int $deferred;

    /**
     * @var ?int $delivered Number of delivered emails for the campaign
     */
    #[JsonProperty('delivered')]
    public ?int $delivered;

    /**
     * @var ?int $estimatedViews Rate of recipients without any privacy protection option enabled in their email client, applied to all delivered emails
     */
    #[JsonProperty('estimatedViews')]
    public ?int $estimatedViews;

    /**
     * @var ?int $hardBounces Number of hard bounces for the campaign
     */
    #[JsonProperty('hardBounces')]
    public ?int $hardBounces;

    /**
     * @var ?int $listId List Id of email campaign (only in case of get email campaign(s)(not for global stats))
     */
    #[JsonProperty('listId')]
    public ?int $listId;

    /**
     * @var ?float $opensRate Percentage of recipients who open the email out of your total number of recipients. Depending on your Campaign settings, they may include Apple MPP opens.
     */
    #[JsonProperty('opensRate')]
    public ?float $opensRate;

    /**
     * @var ?int $returnBounce Total number of non-delivered campaigns for a particular campaign id.
     */
    #[JsonProperty('returnBounce')]
    public ?int $returnBounce;

    /**
     * @var ?int $sent Number of sent emails for the campaign
     */
    #[JsonProperty('sent')]
    public ?int $sent;

    /**
     * @var ?int $softBounces Number of softbounce for the campaign
     */
    #[JsonProperty('softBounces')]
    public ?int $softBounces;

    /**
     * @var ?int $trackableViews Recipients without any privacy protection option enabled in their email email client
     */
    #[JsonProperty('trackableViews')]
    public ?int $trackableViews;

    /**
     * @var ?float $trackableViewsRate Rate of recipients without any privacy protection option enabled in their email client
     */
    #[JsonProperty('trackableViewsRate')]
    public ?float $trackableViewsRate;

    /**
     * @var ?int $uniqueClicks Number of unique clicks for the campaign
     */
    #[JsonProperty('uniqueClicks')]
    public ?int $uniqueClicks;

    /**
     * @var ?int $uniqueViews Number of unique openings for the campaign
     */
    #[JsonProperty('uniqueViews')]
    public ?int $uniqueViews;

    /**
     * @var ?int $unsubscriptions Number of unsubscription for the campaign
     */
    #[JsonProperty('unsubscriptions')]
    public ?int $unsubscriptions;

    /**
     * @var ?int $viewed Number of openings for the campaign
     */
    #[JsonProperty('viewed')]
    public ?int $viewed;

    /**
     * @param array{
     *   appleMppOpens?: ?int,
     *   clickers?: ?int,
     *   complaints?: ?int,
     *   deferred?: ?int,
     *   delivered?: ?int,
     *   estimatedViews?: ?int,
     *   hardBounces?: ?int,
     *   listId?: ?int,
     *   opensRate?: ?float,
     *   returnBounce?: ?int,
     *   sent?: ?int,
     *   softBounces?: ?int,
     *   trackableViews?: ?int,
     *   trackableViewsRate?: ?float,
     *   uniqueClicks?: ?int,
     *   uniqueViews?: ?int,
     *   unsubscriptions?: ?int,
     *   viewed?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->appleMppOpens = $values['appleMppOpens'] ?? null;
        $this->clickers = $values['clickers'] ?? null;
        $this->complaints = $values['complaints'] ?? null;
        $this->deferred = $values['deferred'] ?? null;
        $this->delivered = $values['delivered'] ?? null;
        $this->estimatedViews = $values['estimatedViews'] ?? null;
        $this->hardBounces = $values['hardBounces'] ?? null;
        $this->listId = $values['listId'] ?? null;
        $this->opensRate = $values['opensRate'] ?? null;
        $this->returnBounce = $values['returnBounce'] ?? null;
        $this->sent = $values['sent'] ?? null;
        $this->softBounces = $values['softBounces'] ?? null;
        $this->trackableViews = $values['trackableViews'] ?? null;
        $this->trackableViewsRate = $values['trackableViewsRate'] ?? null;
        $this->uniqueClicks = $values['uniqueClicks'] ?? null;
        $this->uniqueViews = $values['uniqueViews'] ?? null;
        $this->unsubscriptions = $values['unsubscriptions'] ?? null;
        $this->viewed = $values['viewed'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
