<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\EmailCampaigns\Types\UpdateEmailCampaignRequestEmailExpirationDate;
use Brevo\Core\Types\ArrayType;
use Brevo\EmailCampaigns\Types\UpdateEmailCampaignRequestRecipients;
use Brevo\EmailCampaigns\Types\UpdateEmailCampaignRequestSender;
use Brevo\EmailCampaigns\Types\UpdateEmailCampaignRequestWinnerCriteria;

class UpdateEmailCampaignRequest extends JsonSerializableType
{
    /**
     * @var ?bool $abTesting Status of A/B Test. abTesting = false means it is disabled & abTesting = true means it is enabled. **subjectA, subjectB, splitRule, winnerCriteria & winnerDelay** will be considered when abTesting is set to true. subjectA & subjectB are mandatory together & subject if passed is ignored. **Can be set to true only if sendAtBestTime is false**. You will be able to set up two subject lines for your campaign and send them to a random sample of your total recipients. Half of the test group will receive version A, and the other half will receive version B
     */
    #[JsonProperty('abTesting')]
    public ?bool $abTesting;

    /**
     * @var ?string $attachmentUrl Absolute url of the attachment (no local file). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps'
     */
    #[JsonProperty('attachmentUrl')]
    public ?string $attachmentUrl;

    /**
     * @var ?UpdateEmailCampaignRequestEmailExpirationDate $emailExpirationDate To reduce your carbon footprint, set an expiration date for your email. If supported, it will be automatically deleted from the recipient’s inbox, saving storage space and energy.
     */
    #[JsonProperty('emailExpirationDate')]
    public ?UpdateEmailCampaignRequestEmailExpirationDate $emailExpirationDate;

    /**
     * @var ?string $footer Footer of the email campaign
     */
    #[JsonProperty('footer')]
    public ?string $footer;

    /**
     * @var ?string $header Header of the email campaign
     */
    #[JsonProperty('header')]
    public ?string $header;

    /**
     * @var ?string $htmlContent Body of the message (HTML version). If the campaign is designed using Drag & Drop editor via HTML content, then the design page will not have Drag & Drop editor access for that campaign. **REQUIRED if htmlUrl is empty**
     */
    #[JsonProperty('htmlContent')]
    public ?string $htmlContent;

    /**
     * @var ?string $htmlUrl Url which contents the body of the email message. **REQUIRED if htmlContent is empty**
     */
    #[JsonProperty('htmlUrl')]
    public ?string $htmlUrl;

    /**
     * @var ?int $increaseRate Set a percentage increase rate for warming up your ip. We recommend you set the increase rate to 30% per day. If you want to send the same number of emails every day, set the daily increase value to 0%.
     */
    #[JsonProperty('increaseRate')]
    public ?int $increaseRate;

    /**
     * @var ?int $initialQuota Set an initial quota greater than 1 for warming up your ip. We recommend you set a value of 3000.
     */
    #[JsonProperty('initialQuota')]
    public ?int $initialQuota;

    /**
     * @var ?bool $inlineImageActivation Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email. You cannot send a campaign of more than **4MB** with images embedded in the email. Campaigns with the images embedded in the email _must be sent to less than 5000 contacts_.
     */
    #[JsonProperty('inlineImageActivation')]
    public ?bool $inlineImageActivation;

    /**
     * @var ?bool $ipWarmupEnable **Available for dedicated ip clients**. Set this to true if you wish to warm up your ip.
     */
    #[JsonProperty('ipWarmupEnable')]
    public ?bool $ipWarmupEnable;

    /**
     * @var ?bool $mirrorActive Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
     */
    #[JsonProperty('mirrorActive')]
    public ?bool $mirrorActive;

    /**
     * @var ?string $name Name of the campaign
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, mixed> $params Pass the set of attributes to customize the type classic campaign. For example: **{"FNAME":"Joe", "LNAME":"Doe"}**. Only available if **type** is **classic**. It's considered only if campaign is in _New Template Language format_. The New Template Language is dependent on the values of **subject, htmlContent/htmlUrl, sender.name & toField**
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var ?string $previewText Preview text or preheader of the email campaign
     */
    #[JsonProperty('previewText')]
    public ?string $previewText;

    /**
     * @var ?UpdateEmailCampaignRequestRecipients $recipients Segment ids and List ids to include/exclude from campaign
     */
    #[JsonProperty('recipients')]
    public ?UpdateEmailCampaignRequestRecipients $recipients;

    /**
     * @var ?bool $recurring **FOR TRIGGER ONLY !** Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
     */
    #[JsonProperty('recurring')]
    public ?bool $recurring;

    /**
     * @var ?string $replyTo Email on which campaign recipients will be able to reply to
     */
    #[JsonProperty('replyTo')]
    public ?string $replyTo;

    /**
     * @var ?string $scheduledAt UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** If sendAtBestTime is set to true, your campaign will be sent according to the date passed (ignoring the time part).
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var ?bool $sendAtBestTime Set this to true if you want to send your campaign at best time. Note:- **if true, warmup ip will be disabled.**
     */
    #[JsonProperty('sendAtBestTime')]
    public ?bool $sendAtBestTime;

    /**
     * @var ?UpdateEmailCampaignRequestSender $sender Sender details including id or email and name (optional). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
     */
    #[JsonProperty('sender')]
    public ?UpdateEmailCampaignRequestSender $sender;

    /**
     * @var ?int $splitRule Add the size of your test groups. **Mandatory if abTesting = true & 'recipients' is passed**. We'll send version A and B to a random sample of recipients, and then the winning version to everyone else
     */
    #[JsonProperty('splitRule')]
    public ?int $splitRule;

    /**
     * @var ?string $subject Subject of the campaign
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $subjectA Subject A of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
     */
    #[JsonProperty('subjectA')]
    public ?string $subjectA;

    /**
     * @var ?string $subjectB Subject B of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
     */
    #[JsonProperty('subjectB')]
    public ?string $subjectB;

    /**
     * @var ?string $tag Tag of the campaign
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var ?string $toField To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
     */
    #[JsonProperty('toField')]
    public ?string $toField;

    /**
     * @var ?string $unsubscriptionPageId Enter an unsubscription page id. The page id is a 24 digit alphanumeric id that can be found in the URL when editing the page.
     */
    #[JsonProperty('unsubscriptionPageId')]
    public ?string $unsubscriptionPageId;

    /**
     * @var ?string $updateFormId **Mandatory if templateId is used containing the {{ update_profile }} tag**. Enter an update profile form id. The form id is a 24 digit alphanumeric id that can be found in the URL when editing the form.
     */
    #[JsonProperty('updateFormId')]
    public ?string $updateFormId;

    /**
     * @var ?string $utmCampaign Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed
     */
    #[JsonProperty('utmCampaign')]
    public ?string $utmCampaign;

    /**
     * @var ?value-of<UpdateEmailCampaignRequestWinnerCriteria> $winnerCriteria Choose the metrics that will determinate the winning version. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerCriteria` is ignored if passed
     */
    #[JsonProperty('winnerCriteria')]
    public ?string $winnerCriteria;

    /**
     * @var ?int $winnerDelay Choose the duration of the test in hours. Maximum is 7 days, pass 24*7 = 168 hours. The winning version will be sent at the end of the test. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerDelay` is ignored if passed
     */
    #[JsonProperty('winnerDelay')]
    public ?int $winnerDelay;

    /**
     * @param array{
     *   abTesting?: ?bool,
     *   attachmentUrl?: ?string,
     *   emailExpirationDate?: ?UpdateEmailCampaignRequestEmailExpirationDate,
     *   footer?: ?string,
     *   header?: ?string,
     *   htmlContent?: ?string,
     *   htmlUrl?: ?string,
     *   increaseRate?: ?int,
     *   initialQuota?: ?int,
     *   inlineImageActivation?: ?bool,
     *   ipWarmupEnable?: ?bool,
     *   mirrorActive?: ?bool,
     *   name?: ?string,
     *   params?: ?array<string, mixed>,
     *   previewText?: ?string,
     *   recipients?: ?UpdateEmailCampaignRequestRecipients,
     *   recurring?: ?bool,
     *   replyTo?: ?string,
     *   scheduledAt?: ?string,
     *   sendAtBestTime?: ?bool,
     *   sender?: ?UpdateEmailCampaignRequestSender,
     *   splitRule?: ?int,
     *   subject?: ?string,
     *   subjectA?: ?string,
     *   subjectB?: ?string,
     *   tag?: ?string,
     *   toField?: ?string,
     *   unsubscriptionPageId?: ?string,
     *   updateFormId?: ?string,
     *   utmCampaign?: ?string,
     *   winnerCriteria?: ?value-of<UpdateEmailCampaignRequestWinnerCriteria>,
     *   winnerDelay?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->abTesting = $values['abTesting'] ?? null;
        $this->attachmentUrl = $values['attachmentUrl'] ?? null;
        $this->emailExpirationDate = $values['emailExpirationDate'] ?? null;
        $this->footer = $values['footer'] ?? null;
        $this->header = $values['header'] ?? null;
        $this->htmlContent = $values['htmlContent'] ?? null;
        $this->htmlUrl = $values['htmlUrl'] ?? null;
        $this->increaseRate = $values['increaseRate'] ?? null;
        $this->initialQuota = $values['initialQuota'] ?? null;
        $this->inlineImageActivation = $values['inlineImageActivation'] ?? null;
        $this->ipWarmupEnable = $values['ipWarmupEnable'] ?? null;
        $this->mirrorActive = $values['mirrorActive'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->params = $values['params'] ?? null;
        $this->previewText = $values['previewText'] ?? null;
        $this->recipients = $values['recipients'] ?? null;
        $this->recurring = $values['recurring'] ?? null;
        $this->replyTo = $values['replyTo'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sendAtBestTime = $values['sendAtBestTime'] ?? null;
        $this->sender = $values['sender'] ?? null;
        $this->splitRule = $values['splitRule'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->subjectA = $values['subjectA'] ?? null;
        $this->subjectB = $values['subjectB'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->toField = $values['toField'] ?? null;
        $this->unsubscriptionPageId = $values['unsubscriptionPageId'] ?? null;
        $this->updateFormId = $values['updateFormId'] ?? null;
        $this->utmCampaign = $values['utmCampaign'] ?? null;
        $this->winnerCriteria = $values['winnerCriteria'] ?? null;
        $this->winnerDelay = $values['winnerDelay'] ?? null;
    }
}
