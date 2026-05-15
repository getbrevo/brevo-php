<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestDowngradeScheduleDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
