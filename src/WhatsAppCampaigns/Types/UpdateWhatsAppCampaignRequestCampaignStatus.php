<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum UpdateWhatsAppCampaignRequestCampaignStatus: string
{
    case Scheduled = "scheduled";
    case Suspended = "suspended";
}
