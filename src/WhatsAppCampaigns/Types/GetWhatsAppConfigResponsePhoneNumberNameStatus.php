<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum GetWhatsAppConfigResponsePhoneNumberNameStatus: string
{
    case Approved = "APPROVED";
    case Pending = "PENDING";
    case Rejected = "REJECTED";
}
