<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceDefinitionRequestBalanceOptionCreditRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
