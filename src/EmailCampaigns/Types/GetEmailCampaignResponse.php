<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Types\GetCampaignRecipients;
use Brevo\Types\GetExtendedCampaignStats;

class GetEmailCampaignResponse extends JsonSerializableType
{
    /**
     * @var ?string $attachmentFile Url of the attachment file. Only available if the campaign has an attachment.
     */
    #[JsonProperty('attachmentFile')]
    public ?string $attachmentFile;

    /**
     * @var ?bool $abTesting Status of A/B Test for the campaign. abTesting = false means it is disabled, & abTesting = true means it is enabled.
     */
    #[JsonProperty('abTesting')]
    public ?bool $abTesting;

    /**
     * @var int $id ID of the campaign
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Name of the campaign
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $previewText Preview text or preheader of the email campaign
     */
    #[JsonProperty('previewText')]
    public ?string $previewText;

    /**
     * @var ?string $scheduledAt UTC date-time on which campaign is scheduled (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var ?bool $sendAtBestTime It is true if you have chosen to send your campaign at best time, otherwise it is false
     */
    #[JsonProperty('sendAtBestTime')]
    public ?bool $sendAtBestTime;

    /**
     * @var ?int $splitRule The size of your ab-test groups. Only available if `abTesting` flag of the campaign is `true`
     */
    #[JsonProperty('splitRule')]
    public ?int $splitRule;

    /**
     * @var value-of<GetEmailCampaignResponseStatus> $status Status of the campaign
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $subject Subject of the campaign. Only available if `abTesting` flag of the campaign is `false`
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $subjectA Subject A of the ab-test campaign. Only available if `abTesting` flag of the campaign is `true`
     */
    #[JsonProperty('subjectA')]
    public ?string $subjectA;

    /**
     * @var ?string $subjectB Subject B of the ab-test campaign. Only available if `abTesting` flag of the campaign is `true`
     */
    #[JsonProperty('subjectB')]
    public ?string $subjectB;

    /**
     * @var value-of<GetEmailCampaignResponseType> $type Type of campaign
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $winnerCriteria Criteria for the winning version. Only available if `abTesting` flag of the campaign is `true`
     */
    #[JsonProperty('winnerCriteria')]
    public ?string $winnerCriteria;

    /**
     * @var ?int $winnerDelay The duration of the test in hours at the end of which the winning version will be sent. Only available if `abTesting` flag of the campaign is `true`
     */
    #[JsonProperty('winnerDelay')]
    public ?int $winnerDelay;

    /**
     * @var ?string $attachmentUrl URL of the attachment file associated with the campaign. Empty string if no attachment is present.
     */
    #[JsonProperty('attachmentUrl')]
    public ?string $attachmentUrl;

    /**
     * @var string $createdAt Creation UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?GetEmailCampaignResponseEmailExpirationDate $emailExpirationDate Expiration date configuration for the email campaign, if set. Contains the duration and unit of the email expiry.
     */
    #[JsonProperty('emailExpirationDate')]
    public ?GetEmailCampaignResponseEmailExpirationDate $emailExpirationDate;

    /**
     * @var string $footer Footer of the campaign
     */
    #[JsonProperty('footer')]
    public string $footer;

    /**
     * @var string $header Header of the campaign
     */
    #[JsonProperty('header')]
    public string $header;

    /**
     * @var string $htmlContent HTML content of the campaign
     */
    #[JsonProperty('htmlContent')]
    public string $htmlContent;

    /**
     * @var ?bool $inlineImageActivation Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email.
     */
    #[JsonProperty('inlineImageActivation')]
    public ?bool $inlineImageActivation;

    /**
     * @var ?bool $mirrorActive Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
     */
    #[JsonProperty('mirrorActive')]
    public ?bool $mirrorActive;

    /**
     * @var string $modifiedAt UTC date-time of last modification of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var ?bool $recurring FOR TRIGGER ONLY ! Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
     */
    #[JsonProperty('recurring')]
    public ?bool $recurring;

    /**
     * @var string $replyTo Email defined as the "Reply to" of the campaign
     */
    #[JsonProperty('replyTo')]
    public string $replyTo;

    /**
     * @var ?int $returnBounce Total number of non-delivered campaigns for a particular campaign id.
     */
    #[JsonProperty('returnBounce')]
    public ?int $returnBounce;

    /**
     * @var GetEmailCampaignResponseSender $sender
     */
    #[JsonProperty('sender')]
    public GetEmailCampaignResponseSender $sender;

    /**
     * @var ?string $sentDate Sent UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if 'status' of the campaign is 'sent'
     */
    #[JsonProperty('sentDate')]
    public ?string $sentDate;

    /**
     * @var ?string $shareLink Link to share the campaign on social media. For trigger campaigns, this returns a descriptive message instead of a URL. For classic campaigns that have not been sent, this also returns a descriptive message.
     */
    #[JsonProperty('shareLink')]
    public ?string $shareLink;

    /**
     * @var ?string $tag Tag of the campaign
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var ?array<string> $tags List of tags of the campaign
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var bool $testSent Retrieved the status of test email sending. (true=Test email has been sent  false=Test email has not been sent)
     */
    #[JsonProperty('testSent')]
    public bool $testSent;

    /**
     * @var ?string $toField Customisation of the "to" field of the campaign
     */
    #[JsonProperty('toField')]
    public ?string $toField;

    /**
     * @var ?string $utmCampaignValue The utm_campaign value associated with the campaign. Only present if a UTM campaign value was set.
     */
    #[JsonProperty('utmCampaignValue')]
    public ?string $utmCampaignValue;

    /**
     * @var ?int $utmId The campaign ID used as utm_id parameter. Only present if UTM campaign tracking with ID is enabled.
     */
    #[JsonProperty('utmID')]
    public ?int $utmId;

    /**
     * @var ?string $utmMedium The utm_medium value. Set to "EMAIL" when UTM campaign tracking is enabled.
     */
    #[JsonProperty('utmMedium')]
    public ?string $utmMedium;

    /**
     * @var ?string $utmSource The utm_source value. Set to "Brevo" when UTM campaign tracking is enabled.
     */
    #[JsonProperty('utmSource')]
    public ?string $utmSource;

    /**
     * @var GetCampaignRecipients $recipients
     */
    #[JsonProperty('recipients')]
    public GetCampaignRecipients $recipients;

    /**
     * @var GetExtendedCampaignStats $statistics
     */
    #[JsonProperty('statistics')]
    public GetExtendedCampaignStats $statistics;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     *   status: value-of<GetEmailCampaignResponseStatus>,
     *   type: value-of<GetEmailCampaignResponseType>,
     *   createdAt: string,
     *   footer: string,
     *   header: string,
     *   htmlContent: string,
     *   modifiedAt: string,
     *   replyTo: string,
     *   sender: GetEmailCampaignResponseSender,
     *   testSent: bool,
     *   recipients: GetCampaignRecipients,
     *   statistics: GetExtendedCampaignStats,
     *   attachmentFile?: ?string,
     *   abTesting?: ?bool,
     *   previewText?: ?string,
     *   scheduledAt?: ?string,
     *   sendAtBestTime?: ?bool,
     *   splitRule?: ?int,
     *   subject?: ?string,
     *   subjectA?: ?string,
     *   subjectB?: ?string,
     *   winnerCriteria?: ?string,
     *   winnerDelay?: ?int,
     *   attachmentUrl?: ?string,
     *   emailExpirationDate?: ?GetEmailCampaignResponseEmailExpirationDate,
     *   inlineImageActivation?: ?bool,
     *   mirrorActive?: ?bool,
     *   recurring?: ?bool,
     *   returnBounce?: ?int,
     *   sentDate?: ?string,
     *   shareLink?: ?string,
     *   tag?: ?string,
     *   tags?: ?array<string>,
     *   toField?: ?string,
     *   utmCampaignValue?: ?string,
     *   utmId?: ?int,
     *   utmMedium?: ?string,
     *   utmSource?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attachmentFile = $values['attachmentFile'] ?? null;
        $this->abTesting = $values['abTesting'] ?? null;
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->previewText = $values['previewText'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sendAtBestTime = $values['sendAtBestTime'] ?? null;
        $this->splitRule = $values['splitRule'] ?? null;
        $this->status = $values['status'];
        $this->subject = $values['subject'] ?? null;
        $this->subjectA = $values['subjectA'] ?? null;
        $this->subjectB = $values['subjectB'] ?? null;
        $this->type = $values['type'];
        $this->winnerCriteria = $values['winnerCriteria'] ?? null;
        $this->winnerDelay = $values['winnerDelay'] ?? null;
        $this->attachmentUrl = $values['attachmentUrl'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->emailExpirationDate = $values['emailExpirationDate'] ?? null;
        $this->footer = $values['footer'];
        $this->header = $values['header'];
        $this->htmlContent = $values['htmlContent'];
        $this->inlineImageActivation = $values['inlineImageActivation'] ?? null;
        $this->mirrorActive = $values['mirrorActive'] ?? null;
        $this->modifiedAt = $values['modifiedAt'];
        $this->recurring = $values['recurring'] ?? null;
        $this->replyTo = $values['replyTo'];
        $this->returnBounce = $values['returnBounce'] ?? null;
        $this->sender = $values['sender'];
        $this->sentDate = $values['sentDate'] ?? null;
        $this->shareLink = $values['shareLink'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->testSent = $values['testSent'];
        $this->toField = $values['toField'] ?? null;
        $this->utmCampaignValue = $values['utmCampaignValue'] ?? null;
        $this->utmId = $values['utmId'] ?? null;
        $this->utmMedium = $values['utmMedium'] ?? null;
        $this->utmSource = $values['utmSource'] ?? null;
        $this->recipients = $values['recipients'];
        $this->statistics = $values['statistics'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
