<?php

namespace Brevo\EmailCampaigns\Types;

enum CreateEmailCampaignRequestEmailExpirationDateUnit: string
{
    case Days = "days";
    case Weeks = "weeks";
    case Months = "months";
}
