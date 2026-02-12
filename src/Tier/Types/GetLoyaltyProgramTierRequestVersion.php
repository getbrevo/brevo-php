<?php

namespace Brevo\Tier\Types;

enum GetLoyaltyProgramTierRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
