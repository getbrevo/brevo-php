<?php

namespace Brevo\Tier\Types;

enum GetTierGroupRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
