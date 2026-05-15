<?php

namespace Brevo\Balance\Types;

enum CreateBalanceOrderRequestSource: string
{
    case Engine = "engine";
    case User = "user";
}
