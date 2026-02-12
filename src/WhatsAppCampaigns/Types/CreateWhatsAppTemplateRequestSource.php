<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum CreateWhatsAppTemplateRequestSource: string
{
    case Automation = "Automation";
    case Conversations = "Conversations";
}
