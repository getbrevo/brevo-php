<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignRequestEmailExpirationDate;
use Brevo\Core\Types\ArrayType;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignRequestRecipients;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignRequestSender;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignRequestWinnerCriteria;

class CreateEmailCampaignRequest extends JsonSerializableType
{
    /**
     * @var ?bool $abTesting Status of A/B Test. abTesting = false means it is disabled & abTesting = true means it is enabled. **subjectA, subjectB, splitRule, winnerCriteria & winnerDelay** will be considered when abTesting is set to true. subjectA & subjectB are mandatory together & subject if passed is ignored. **Can be set to true only if sendAtBestTime is false**. You will be able to set up two subject lines for your campaign and send them to a random sample of your total recipients. Half of the test group will receive version A, and the other half will receive version B
     */
    #[JsonProperty('abTesting')]
    public ?bool $abTesting;

    /**
     * @var ?string $attachmentUrl Absolute url of the attachment (no local file). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps
     */
    #[JsonProperty('attachmentUrl')]
    public ?string $attachmentUrl;

    /**
     * @var ?CreateEmailCampaignRequestEmailExpirationDate $emailExpirationDate To reduce your carbon footprint, set an expiration date for your email. If supported, it will be automatically deleted from the recipient’s inbox, saving storage space and energy. Learn more about setting an email expiration date. For reference , ``https://help.brevo.com/hc/en-us/articles/4413566705298-Create-an-email-campaign``
     */
    #[JsonProperty('emailExpirationDate')]
    public ?CreateEmailCampaignRequestEmailExpirationDate $emailExpirationDate;

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
     * @var ?string $htmlContent Mandatory if htmlUrl and templateId are empty. Body of the message (HTML).
     */
    #[JsonProperty('htmlContent')]
    public ?string $htmlContent;

    /**
     * @var ?string $htmlUrl **Mandatory if htmlContent and templateId are empty**. Url to the message (HTML). For example: **https://html.domain.com**
     */
    #[JsonProperty('htmlUrl')]
    public ?string $htmlUrl;

    /**
     * @var ?int $increaseRate **Mandatory if ipWarmupEnable is set to true**. Set a percentage increase rate for warming up your ip. We recommend you set the increase rate to 30% per day. If you want to send the same number of emails every day, set the daily increase value to 0%.
     */
    #[JsonProperty('increaseRate')]
    public ?int $increaseRate;

    /**
     * @var ?int $initialQuota **Mandatory if ipWarmupEnable is set to true**. Set an initial quota greater than 1 for warming up your ip. We recommend you set a value of 3000.
     */
    #[JsonProperty('initialQuota')]
    public ?int $initialQuota;

    /**
     * @var ?bool $inlineImageActivation Use true to embedded the images in your email. Final size of the email should be less than **4MB**. Campaigns with embedded images can _not be sent to more than 5000 contacts_
     */
    #[JsonProperty('inlineImageActivation')]
    public ?bool $inlineImageActivation;

    /**
     * @var ?bool $ipWarmupEnable **Available for dedicated ip clients**. Set this to true if you wish to warm up your ip.
     */
    #[JsonProperty('ipWarmupEnable')]
    public ?bool $ipWarmupEnable;

    /**
     * @var ?bool $mirrorActive Use true to enable the mirror link
     */
    #[JsonProperty('mirrorActive')]
    public ?bool $mirrorActive;

    /**
     * @var string $name Name of the campaign
     */
    #[JsonProperty('name')]
    public string $name;

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
     * @var ?CreateEmailCampaignRequestRecipients $recipients Segment ids and List ids to include/exclude from campaign
     */
    #[JsonProperty('recipients')]
    public ?CreateEmailCampaignRequestRecipients $recipients;

    /**
     * @var ?string $replyTo Email on which the campaign recipients will be able to reply to
     */
    #[JsonProperty('replyTo')]
    public ?string $replyTo;

    /**
     * @var ?string $scheduledAt Sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result**. If sendAtBestTime is set to true, your campaign will be sent according to the date passed (ignoring the time part). For example: **2017-06-01T12:30:00+02:00**
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var ?bool $sendAtBestTime Set this to true if you want to send your campaign at best time.
     */
    #[JsonProperty('sendAtBestTime')]
    public ?bool $sendAtBestTime;

    /**
     * @var CreateEmailCampaignRequestSender $sender Sender details including id or email and name (_optional_). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
     */
    #[JsonProperty('sender')]
    public CreateEmailCampaignRequestSender $sender;

    /**
     * @var ?int $splitRule Add the size of your test groups. **Mandatory if abTesting = true & 'recipients' is passed**. We'll send version A and B to a random sample of recipients, and then the winning version to everyone else
     */
    #[JsonProperty('splitRule')]
    public ?int $splitRule;

    /**
     * @var ?string $subject Subject of the campaign. **Mandatory if abTesting is false**. Ignored if abTesting is true.
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
     * @var ?int $templateId **Mandatory if htmlContent and htmlUrl are empty**. Id of the transactional email template with status _active_. Used to copy only its content fetched from htmlContent/htmlUrl to an email campaign for RSS feature.
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @var ?string $toField To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
     */
    #[JsonProperty('toField')]
    public ?string $toField;

    /**
     * @var ?string $unsubscriptionPageId Enter an unsubscription page id. The page id is a 24 digit alphanumeric id that can be found in the URL when editing the page. If not entered, then the default unsubscription page will be used.
     */
    #[JsonProperty('unsubscriptionPageId')]
    public ?string $unsubscriptionPageId;

    /**
     * @var ?string $updateFormId **Mandatory if templateId is used containing the {{ update_profile }} tag**. Enter an update profile form id. The form id is a 24 digit alphanumeric id that can be found in the URL when editing the form. If not entered, then the default update profile form will be used.
     */
    #[JsonProperty('updateFormId')]
    public ?string $updateFormId;

    /**
     * @var ?string $utmCampaign Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed
     */
    #[JsonProperty('utmCampaign')]
    public ?string $utmCampaign;

    /**
     * @var ?value-of<CreateEmailCampaignRequestWinnerCriteria> $winnerCriteria Choose the metrics that will determinate the winning version. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerCriteria` is ignored if passed
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
     *   name: string,
     *   sender: CreateEmailCampaignRequestSender,
     *   abTesting?: ?bool,
     *   attachmentUrl?: ?string,
     *   emailExpirationDate?: ?CreateEmailCampaignRequestEmailExpirationDate,
     *   footer?: ?string,
     *   header?: ?string,
     *   htmlContent?: ?string,
     *   htmlUrl?: ?string,
     *   increaseRate?: ?int,
     *   initialQuota?: ?int,
     *   inlineImageActivation?: ?bool,
     *   ipWarmupEnable?: ?bool,
     *   mirrorActive?: ?bool,
     *   params?: ?array<string, mixed>,
     *   previewText?: ?string,
     *   recipients?: ?CreateEmailCampaignRequestRecipients,
     *   replyTo?: ?string,
     *   scheduledAt?: ?string,
     *   sendAtBestTime?: ?bool,
     *   splitRule?: ?int,
     *   subject?: ?string,
     *   subjectA?: ?string,
     *   subjectB?: ?string,
     *   tag?: ?string,
     *   templateId?: ?int,
     *   toField?: ?string,
     *   unsubscriptionPageId?: ?string,
     *   updateFormId?: ?string,
     *   utmCampaign?: ?string,
     *   winnerCriteria?: ?value-of<CreateEmailCampaignRequestWinnerCriteria>,
     *   winnerDelay?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
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
        $this->name = $values['name'];
        $this->params = $values['params'] ?? null;
        $this->previewText = $values['previewText'] ?? null;
        $this->recipients = $values['recipients'] ?? null;
        $this->replyTo = $values['replyTo'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sendAtBestTime = $values['sendAtBestTime'] ?? null;
        $this->sender = $values['sender'];
        $this->splitRule = $values['splitRule'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->subjectA = $values['subjectA'] ?? null;
        $this->subjectB = $values['subjectB'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->toField = $values['toField'] ?? null;
        $this->unsubscriptionPageId = $values['unsubscriptionPageId'] ?? null;
        $this->updateFormId = $values['updateFormId'] ?? null;
        $this->utmCampaign = $values['utmCampaign'] ?? null;
        $this->winnerCriteria = $values['winnerCriteria'] ?? null;
        $this->winnerDelay = $values['winnerDelay'] ?? null;
    }
}
