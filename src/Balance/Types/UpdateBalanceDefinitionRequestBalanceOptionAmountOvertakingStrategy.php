<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceDefinitionRequestBalanceOptionAmountOvertakingStrategy: string
{
    case Strict = "strict";
    case Partial = "partial";
}
