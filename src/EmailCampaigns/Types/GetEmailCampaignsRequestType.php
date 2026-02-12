<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignsRequestType: string
{
    case Classic = "classic";
    case Trigger = "trigger";
}
