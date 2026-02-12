<?php

namespace Brevo\MasterAccount\Types;

enum PostCorporateSubAccountSsoTokenRequestTarget: string
{
    case Automation = "automation";
    case EmailCampaign = "email_campaign";
    case Contacts = "contacts";
    case LandingPages = "landing_pages";
    case EmailTransactional = "email_transactional";
    case Senders = "senders";
    case SmsCampaign = "sms_campaign";
    case SmsTransactional = "sms_transactional";
}
