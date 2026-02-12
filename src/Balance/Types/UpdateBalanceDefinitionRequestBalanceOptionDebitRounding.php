<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceDefinitionRequestBalanceOptionDebitRounding: string
{
    case Lower = "lower";
    case Upper = "upper";
    case Natural = "natural";
}
