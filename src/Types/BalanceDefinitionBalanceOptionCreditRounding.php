<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceOptionCreditRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
