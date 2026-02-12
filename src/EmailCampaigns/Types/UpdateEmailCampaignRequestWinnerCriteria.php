<?php

namespace Brevo\EmailCampaigns\Types;

enum UpdateEmailCampaignRequestWinnerCriteria: string
{
    case Open = "open";
    case Click = "click";
}
