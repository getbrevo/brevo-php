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
use Brevo\Account\AccountClientInterface;
use Brevo\MasterAccount\MasterAccountClientInterface;
use Brevo\User\UserClientInterface;
use Brevo\Process\ProcessClientInterface;
use Brevo\Senders\SendersClientInterface;
use Brevo\Domains\DomainsClientInterface;
use Brevo\Webhooks\WebhooksClientInterface;
use Brevo\ExternalFeeds\ExternalFeedsClientInterface;
use Brevo\CustomObjects\CustomObjectsClientInterface;
use Brevo\Contacts\ContactsClientInterface;
use Brevo\Conversations\ConversationsClientInterface;
use Brevo\Ecommerce\EcommerceClientInterface;
use Brevo\Coupons\CouponsClientInterface;
use Brevo\Payments\PaymentsClientInterface;
use Brevo\Event\EventClientInterface;
use Brevo\InboundParsing\InboundParsingClientInterface;
use Brevo\Balance\BalanceClientInterface;
use Brevo\Program\ProgramClientInterface;
use Brevo\Reward\RewardClientInterface;
use Brevo\Tier\TierClientInterface;
use Brevo\EmailCampaigns\EmailCampaignsClientInterface;
use Brevo\SmsCampaigns\SmsCampaignsClientInterface;
use Brevo\WhatsAppCampaigns\WhatsAppCampaignsClientInterface;
use Brevo\Companies\CompaniesClientInterface;
use Brevo\Deals\DealsClientInterface;
use Brevo\Files\FilesClientInterface;
use Brevo\Notes\NotesClientInterface;
use Brevo\Tasks\TasksClientInterface;
use Brevo\TransactionalWhatsApp\TransactionalWhatsAppClientInterface;
use Brevo\TransactionalEmails\TransactionalEmailsClientInterface;
use Brevo\TransactionalSms\TransactionalSmsClientInterface;
use Brevo\SmsTemplates\SmsTemplatesClientInterface;

class Brevo implements BrevoInterface
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
            'X-Fern-SDK-Version' => '4.0.13',
            'User-Agent' => 'getbrevo/brevo-php/4.0.13',
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

    /**
     * @return AccountClientInterface
     */
    public function getAccount(): AccountClientInterface
    {
        return $this->account;
    }

    /**
     * @return MasterAccountClientInterface
     */
    public function getMasterAccount(): MasterAccountClientInterface
    {
        return $this->masterAccount;
    }

    /**
     * @return UserClientInterface
     */
    public function getUser(): UserClientInterface
    {
        return $this->user;
    }

    /**
     * @return ProcessClientInterface
     */
    public function getProcess(): ProcessClientInterface
    {
        return $this->process;
    }

    /**
     * @return SendersClientInterface
     */
    public function getSenders(): SendersClientInterface
    {
        return $this->senders;
    }

    /**
     * @return DomainsClientInterface
     */
    public function getDomains(): DomainsClientInterface
    {
        return $this->domains;
    }

    /**
     * @return WebhooksClientInterface
     */
    public function getWebhooks(): WebhooksClientInterface
    {
        return $this->webhooks;
    }

    /**
     * @return ExternalFeedsClientInterface
     */
    public function getExternalFeeds(): ExternalFeedsClientInterface
    {
        return $this->externalFeeds;
    }

    /**
     * @return CustomObjectsClientInterface
     */
    public function getCustomObjects(): CustomObjectsClientInterface
    {
        return $this->customObjects;
    }

    /**
     * @return ContactsClientInterface
     */
    public function getContacts(): ContactsClientInterface
    {
        return $this->contacts;
    }

    /**
     * @return ConversationsClientInterface
     */
    public function getConversations(): ConversationsClientInterface
    {
        return $this->conversations;
    }

    /**
     * @return EcommerceClientInterface
     */
    public function getEcommerce(): EcommerceClientInterface
    {
        return $this->ecommerce;
    }

    /**
     * @return CouponsClientInterface
     */
    public function getCoupons(): CouponsClientInterface
    {
        return $this->coupons;
    }

    /**
     * @return PaymentsClientInterface
     */
    public function getPayments(): PaymentsClientInterface
    {
        return $this->payments;
    }

    /**
     * @return EventClientInterface
     */
    public function getEvent(): EventClientInterface
    {
        return $this->event;
    }

    /**
     * @return InboundParsingClientInterface
     */
    public function getInboundParsing(): InboundParsingClientInterface
    {
        return $this->inboundParsing;
    }

    /**
     * @return BalanceClientInterface
     */
    public function getBalance(): BalanceClientInterface
    {
        return $this->balance;
    }

    /**
     * @return ProgramClientInterface
     */
    public function getProgram(): ProgramClientInterface
    {
        return $this->program;
    }

    /**
     * @return RewardClientInterface
     */
    public function getReward(): RewardClientInterface
    {
        return $this->reward;
    }

    /**
     * @return TierClientInterface
     */
    public function getTier(): TierClientInterface
    {
        return $this->tier;
    }

    /**
     * @return EmailCampaignsClientInterface
     */
    public function getEmailCampaigns(): EmailCampaignsClientInterface
    {
        return $this->emailCampaigns;
    }

    /**
     * @return SmsCampaignsClientInterface
     */
    public function getSmsCampaigns(): SmsCampaignsClientInterface
    {
        return $this->smsCampaigns;
    }

    /**
     * @return WhatsAppCampaignsClientInterface
     */
    public function getWhatsAppCampaigns(): WhatsAppCampaignsClientInterface
    {
        return $this->whatsAppCampaigns;
    }

    /**
     * @return CompaniesClientInterface
     */
    public function getCompanies(): CompaniesClientInterface
    {
        return $this->companies;
    }

    /**
     * @return DealsClientInterface
     */
    public function getDeals(): DealsClientInterface
    {
        return $this->deals;
    }

    /**
     * @return FilesClientInterface
     */
    public function getFiles(): FilesClientInterface
    {
        return $this->files;
    }

    /**
     * @return NotesClientInterface
     */
    public function getNotes(): NotesClientInterface
    {
        return $this->notes;
    }

    /**
     * @return TasksClientInterface
     */
    public function getTasks(): TasksClientInterface
    {
        return $this->tasks;
    }

    /**
     * @return TransactionalWhatsAppClientInterface
     */
    public function getTransactionalWhatsApp(): TransactionalWhatsAppClientInterface
    {
        return $this->transactionalWhatsApp;
    }

    /**
     * @return TransactionalEmailsClientInterface
     */
    public function getTransactionalEmails(): TransactionalEmailsClientInterface
    {
        return $this->transactionalEmails;
    }

    /**
     * @return TransactionalSmsClientInterface
     */
    public function getTransactionalSms(): TransactionalSmsClientInterface
    {
        return $this->transactionalSms;
    }

    /**
     * @return SmsTemplatesClientInterface
     */
    public function getSmsTemplates(): SmsTemplatesClientInterface
    {
        return $this->smsTemplates;
    }
}
