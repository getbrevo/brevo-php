<?php

namespace Brevo\Types;

enum TierGroupDowngradeScheduleDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
