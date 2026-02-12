<?php

namespace Brevo\Balance\Types;

enum PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionDebitRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
