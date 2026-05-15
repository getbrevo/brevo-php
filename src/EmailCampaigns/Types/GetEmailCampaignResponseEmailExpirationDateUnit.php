<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignResponseEmailExpirationDateUnit: string
{
    case Days = "days";
    case Weeks = "weeks";
    case Months = "months";
}
