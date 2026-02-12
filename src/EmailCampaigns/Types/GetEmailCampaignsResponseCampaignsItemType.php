<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignsResponseCampaignsItemType: string
{
    case Classic = "classic";
    case Trigger = "trigger";
}
