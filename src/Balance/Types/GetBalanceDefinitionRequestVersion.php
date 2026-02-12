<?php

namespace Brevo\Balance\Types;

enum GetBalanceDefinitionRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
