<?php

namespace Brevo\EmailCampaigns\Types;

enum UpdateEmailCampaignRequestEmailExpirationDateUnit: string
{
    case Days = "days";
    case Weeks = "weeks";
    case Months = "months";
}
