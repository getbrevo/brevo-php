<?php

namespace Brevo\Balance\Types;

enum GetBalanceLimitRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
