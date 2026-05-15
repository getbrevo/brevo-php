<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceAvailabilityDurationUnit: string
{
    case Day = "day";
    case Week = "week";
    case Month = "month";
    case Year = "year";
}
