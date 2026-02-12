<?php

namespace Brevo\EmailCampaigns\Types;

enum CreateEmailCampaignRequestWinnerCriteria: string
{
    case Open = "open";
    case Click = "click";
}
