<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignResponseType: string
{
    case Classic = "classic";
    case Trigger = "trigger";
}
