<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceLimitRequestDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
