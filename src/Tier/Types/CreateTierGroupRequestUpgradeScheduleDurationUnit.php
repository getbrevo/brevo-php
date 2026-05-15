<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestUpgradeScheduleDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
