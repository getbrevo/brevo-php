<?php

namespace Brevo\Types;

enum BalanceLimitDurationUnit: string
{
    case Hour = "hour";
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
