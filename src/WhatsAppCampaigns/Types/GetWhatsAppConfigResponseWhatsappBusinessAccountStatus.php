<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum GetWhatsAppConfigResponseWhatsappBusinessAccountStatus: string
{
    case Approved = "APPROVED";
    case Pending = "PENDING";
    case Rejected = "REJECTED";
}
