<?php

namespace Brevo\Tier\Types;

enum GetListOfTierGroupsRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
