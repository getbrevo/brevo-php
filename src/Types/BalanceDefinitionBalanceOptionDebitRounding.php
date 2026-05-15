<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceOptionDebitRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
