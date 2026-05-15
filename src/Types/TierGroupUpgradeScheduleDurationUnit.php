<?php

namespace Brevo\Types;

enum TierGroupUpgradeScheduleDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
