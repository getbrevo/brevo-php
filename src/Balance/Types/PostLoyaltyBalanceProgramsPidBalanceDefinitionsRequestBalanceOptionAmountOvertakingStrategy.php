<?php

namespace Brevo\Balance\Types;

enum PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionAmountOvertakingStrategy: string
{
    case Strict = "strict";
    case Partial = "partial";
}
