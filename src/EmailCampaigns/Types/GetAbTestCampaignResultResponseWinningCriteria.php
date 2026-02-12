<?php

namespace Brevo\EmailCampaigns\Types;

enum GetAbTestCampaignResultResponseWinningCriteria: string
{
    case Open = "Open";
    case Click = "Click";
}
