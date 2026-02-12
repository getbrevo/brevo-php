<?php

namespace Brevo\Balance\Types;

enum PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
