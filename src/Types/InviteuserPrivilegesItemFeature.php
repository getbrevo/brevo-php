<?php

namespace Brevo\Types;

enum InviteuserPrivilegesItemFeature: string
{
    case EmailCampaigns = "email_campaigns";
    case SmsCampaigns = "sms_campaigns";
    case Contacts = "contacts";
    case Templates = "templates";
    case Workflows = "workflows";
    case LandingPages = "landing_pages";
    case TransactionalEmails = "transactional_emails";
    case SmtpApi = "smtp_api";
    case UserManagement = "user_management";
    case SalesPlatform = "sales_platform";
    case Phone = "phone";
    case Conversations = "conversations";
    case SendersDomainsDedicatedIps = "senders_domains_dedicated_ips";
    case PushNotifications = "push_notifications";
    case Companies = "companies";
}
