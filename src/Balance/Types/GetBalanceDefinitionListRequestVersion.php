<?php

namespace Brevo\Balance\Types;

enum GetBalanceDefinitionListRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
