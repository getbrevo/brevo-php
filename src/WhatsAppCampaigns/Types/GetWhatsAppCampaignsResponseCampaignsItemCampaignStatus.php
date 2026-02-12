<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum GetWhatsAppCampaignsResponseCampaignsItemCampaignStatus: string
{
    case Draft = "draft";
    case Scheduled = "scheduled";
    case Pending = "pending";
    case Approved = "approved";
    case Running = "running";
    case Suspended = "suspended";
    case Rejected = "rejected";
    case Sent = "sent";
}
