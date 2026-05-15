<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceOptionAmountOvertakingStrategy: string
{
    case Strict = "strict";
    case Partial = "partial";
}
