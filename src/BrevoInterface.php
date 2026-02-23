<?php

namespace Brevo;

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

interface BrevoInterface
{
    /**
     * @return AccountClientInterface
     */
    public function getAccount(): AccountClientInterface;

    /**
     * @return MasterAccountClientInterface
     */
    public function getMasterAccount(): MasterAccountClientInterface;

    /**
     * @return UserClientInterface
     */
    public function getUser(): UserClientInterface;

    /**
     * @return ProcessClientInterface
     */
    public function getProcess(): ProcessClientInterface;

    /**
     * @return SendersClientInterface
     */
    public function getSenders(): SendersClientInterface;

    /**
     * @return DomainsClientInterface
     */
    public function getDomains(): DomainsClientInterface;

    /**
     * @return WebhooksClientInterface
     */
    public function getWebhooks(): WebhooksClientInterface;

    /**
     * @return ExternalFeedsClientInterface
     */
    public function getExternalFeeds(): ExternalFeedsClientInterface;

    /**
     * @return CustomObjectsClientInterface
     */
    public function getCustomObjects(): CustomObjectsClientInterface;

    /**
     * @return ContactsClientInterface
     */
    public function getContacts(): ContactsClientInterface;

    /**
     * @return ConversationsClientInterface
     */
    public function getConversations(): ConversationsClientInterface;

    /**
     * @return EcommerceClientInterface
     */
    public function getEcommerce(): EcommerceClientInterface;

    /**
     * @return CouponsClientInterface
     */
    public function getCoupons(): CouponsClientInterface;

    /**
     * @return PaymentsClientInterface
     */
    public function getPayments(): PaymentsClientInterface;

    /**
     * @return EventClientInterface
     */
    public function getEvent(): EventClientInterface;

    /**
     * @return InboundParsingClientInterface
     */
    public function getInboundParsing(): InboundParsingClientInterface;

    /**
     * @return BalanceClientInterface
     */
    public function getBalance(): BalanceClientInterface;

    /**
     * @return ProgramClientInterface
     */
    public function getProgram(): ProgramClientInterface;

    /**
     * @return RewardClientInterface
     */
    public function getReward(): RewardClientInterface;

    /**
     * @return TierClientInterface
     */
    public function getTier(): TierClientInterface;

    /**
     * @return EmailCampaignsClientInterface
     */
    public function getEmailCampaigns(): EmailCampaignsClientInterface;

    /**
     * @return SmsCampaignsClientInterface
     */
    public function getSmsCampaigns(): SmsCampaignsClientInterface;

    /**
     * @return WhatsAppCampaignsClientInterface
     */
    public function getWhatsAppCampaigns(): WhatsAppCampaignsClientInterface;

    /**
     * @return CompaniesClientInterface
     */
    public function getCompanies(): CompaniesClientInterface;

    /**
     * @return DealsClientInterface
     */
    public function getDeals(): DealsClientInterface;

    /**
     * @return FilesClientInterface
     */
    public function getFiles(): FilesClientInterface;

    /**
     * @return NotesClientInterface
     */
    public function getNotes(): NotesClientInterface;

    /**
     * @return TasksClientInterface
     */
    public function getTasks(): TasksClientInterface;

    /**
     * @return TransactionalWhatsAppClientInterface
     */
    public function getTransactionalWhatsApp(): TransactionalWhatsAppClientInterface;

    /**
     * @return TransactionalEmailsClientInterface
     */
    public function getTransactionalEmails(): TransactionalEmailsClientInterface;

    /**
     * @return TransactionalSmsClientInterface
     */
    public function getTransactionalSms(): TransactionalSmsClientInterface;

    /**
     * @return SmsTemplatesClientInterface
     */
    public function getSmsTemplates(): SmsTemplatesClientInterface;
}
