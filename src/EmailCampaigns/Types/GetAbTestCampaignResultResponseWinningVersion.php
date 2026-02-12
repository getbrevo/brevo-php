<?php

namespace Brevo\EmailCampaigns\Types;

enum GetAbTestCampaignResultResponseWinningVersion: string
{
    case NotAvailable = "notAvailable";
    case Pending = "pending";
    case Tie = "tie";
    case A = "A";
    case B = "B";
}
