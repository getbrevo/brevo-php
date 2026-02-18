<?php

namespace Brevo;

use Brevo\Account\AccountClient;
use Brevo\MasterAccount\MasterAccountClient;
use Brevo\User\UserClient;
use Brevo\Process\ProcessClient;
use Brevo\Senders\SendersClient;
use Brevo\Domains\DomainsClient;
use Brevo\Webhooks\WebhooksClient;
use Brevo\ExternalFeeds\ExternalFeedsClient;
use Brevo\CustomObjects\CustomObjectsClient;
use Brevo\Contacts\ContactsClient;
use Brevo\Conversations\ConversationsClient;
use Brevo\Ecommerce\EcommerceClient;
use Brevo\Coupons\CouponsClient;
use Brevo\Payments\PaymentsClient;
use Brevo\Event\EventClient;
use Brevo\InboundParsing\InboundParsingClient;
use Brevo\Balance\BalanceClient;
use Brevo\Program\ProgramClient;
use Brevo\Reward\RewardClient;
use Brevo\Tier\TierClient;
use Brevo\EmailCampaigns\EmailCampaignsClient;
use Brevo\SmsCampaigns\SmsCampaignsClient;
use Brevo\WhatsAppCampaigns\WhatsAppCampaignsClient;
use Brevo\Companies\CompaniesClient;
use Brevo\Deals\DealsClient;
use Brevo\Files\FilesClient;
use Brevo\Notes\NotesClient;
use Brevo\Tasks\TasksClient;
use Brevo\TransactionalWhatsApp\TransactionalWhatsAppClient;
use Brevo\TransactionalEmails\TransactionalEmailsClient;
use Brevo\TransactionalSms\TransactionalSmsClient;
use Brevo\SmsTemplates\SmsTemplatesClient;
use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;

class Brevo
{
    /**
     * @var AccountClient $account
     */
    public AccountClient $account;

    /**
     * @var MasterAccountClient $masterAccount
     */
    public MasterAccountClient $masterAccount;

    /**
     * @var UserClient $user
     */
    public UserClient $user;

    /**
     * @var ProcessClient $process
     */
    public ProcessClient $process;

    /**
     * @var SendersClient $senders
     */
    public SendersClient $senders;

    /**
     * @var DomainsClient $domains
     */
    public DomainsClient $domains;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

    /**
     * @var ExternalFeedsClient $externalFeeds
     */
    public ExternalFeedsClient $externalFeeds;

    /**
     * @var CustomObjectsClient $customObjects
     */
    public CustomObjectsClient $customObjects;

    /**
     * @var ContactsClient $contacts
     */
    public ContactsClient $contacts;

    /**
     * @var ConversationsClient $conversations
     */
    public ConversationsClient $conversations;

    /**
     * @var EcommerceClient $ecommerce
     */
    public EcommerceClient $ecommerce;

    /**
     * @var CouponsClient $coupons
     */
    public CouponsClient $coupons;

    /**
     * @var PaymentsClient $payments
     */
    public PaymentsClient $payments;

    /**
     * @var EventClient $event
     */
    public EventClient $event;

    /**
     * @var InboundParsingClient $inboundParsing
     */
    public InboundParsingClient $inboundParsing;

    /**
     * @var BalanceClient $balance
     */
    public BalanceClient $balance;

    /**
     * @var ProgramClient $program
     */
    public ProgramClient $program;

    /**
     * @var RewardClient $reward
     */
    public RewardClient $reward;

    /**
     * @var TierClient $tier
     */
    public TierClient $tier;

    /**
     * @var EmailCampaignsClient $emailCampaigns
     */
    public EmailCampaignsClient $emailCampaigns;

    /**
     * @var SmsCampaignsClient $smsCampaigns
     */
    public SmsCampaignsClient $smsCampaigns;

    /**
     * @var WhatsAppCampaignsClient $whatsAppCampaigns
     */
    public WhatsAppCampaignsClient $whatsAppCampaigns;

    /**
     * @var CompaniesClient $companies
     */
    public CompaniesClient $companies;

    /**
     * @var DealsClient $deals
     */
    public DealsClient $deals;

    /**
     * @var FilesClient $files
     */
    public FilesClient $files;

    /**
     * @var NotesClient $notes
     */
    public NotesClient $notes;

    /**
     * @var TasksClient $tasks
     */
    public TasksClient $tasks;

    /**
     * @var TransactionalWhatsAppClient $transactionalWhatsApp
     */
    public TransactionalWhatsAppClient $transactionalWhatsApp;

    /**
     * @var TransactionalEmailsClient $transactionalEmails
     */
    public TransactionalEmailsClient $transactionalEmails;

    /**
     * @var TransactionalSmsClient $transactionalSms
     */
    public TransactionalSmsClient $transactionalSms;

    /**
     * @var SmsTemplatesClient $smsTemplates
     */
    public SmsTemplatesClient $smsTemplates;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param string $apiKey The apiKey to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        string $apiKey,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'api-key' => $apiKey,
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Brevo',
            'X-Fern-SDK-Version' => '0.0.66',
            'User-Agent' => 'getbrevo/brevo-php/0.0.66',
        ];

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->account = new AccountClient($this->client, $this->options);
        $this->masterAccount = new MasterAccountClient($this->client, $this->options);
        $this->user = new UserClient($this->client, $this->options);
        $this->process = new ProcessClient($this->client, $this->options);
        $this->senders = new SendersClient($this->client, $this->options);
        $this->domains = new DomainsClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
        $this->externalFeeds = new ExternalFeedsClient($this->client, $this->options);
        $this->customObjects = new CustomObjectsClient($this->client, $this->options);
        $this->contacts = new ContactsClient($this->client, $this->options);
        $this->conversations = new ConversationsClient($this->client, $this->options);
        $this->ecommerce = new EcommerceClient($this->client, $this->options);
        $this->coupons = new CouponsClient($this->client, $this->options);
        $this->payments = new PaymentsClient($this->client, $this->options);
        $this->event = new EventClient($this->client, $this->options);
        $this->inboundParsing = new InboundParsingClient($this->client, $this->options);
        $this->balance = new BalanceClient($this->client, $this->options);
        $this->program = new ProgramClient($this->client, $this->options);
        $this->reward = new RewardClient($this->client, $this->options);
        $this->tier = new TierClient($this->client, $this->options);
        $this->emailCampaigns = new EmailCampaignsClient($this->client, $this->options);
        $this->smsCampaigns = new SmsCampaignsClient($this->client, $this->options);
        $this->whatsAppCampaigns = new WhatsAppCampaignsClient($this->client, $this->options);
        $this->companies = new CompaniesClient($this->client, $this->options);
        $this->deals = new DealsClient($this->client, $this->options);
        $this->files = new FilesClient($this->client, $this->options);
        $this->notes = new NotesClient($this->client, $this->options);
        $this->tasks = new TasksClient($this->client, $this->options);
        $this->transactionalWhatsApp = new TransactionalWhatsAppClient($this->client, $this->options);
        $this->transactionalEmails = new TransactionalEmailsClient($this->client, $this->options);
        $this->transactionalSms = new TransactionalSmsClient($this->client, $this->options);
        $this->smsTemplates = new SmsTemplatesClient($this->client, $this->options);
    }
}
