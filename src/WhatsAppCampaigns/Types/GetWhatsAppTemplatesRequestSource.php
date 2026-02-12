<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum GetWhatsAppTemplatesRequestSource: string
{
    case Automation = "Automation";
    case Conversations = "Conversations";
}
