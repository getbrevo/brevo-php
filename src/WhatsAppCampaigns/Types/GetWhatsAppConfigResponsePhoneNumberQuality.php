<?php

namespace Brevo\WhatsAppCampaigns\Types;

enum GetWhatsAppConfigResponsePhoneNumberQuality: string
{
    case Green = "GREEN";
    case Yellow = "YELLOW";
    case Red = "RED";
}
