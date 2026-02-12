<?php

namespace Brevo\Balance\Types;

enum PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceOptionCreditRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
