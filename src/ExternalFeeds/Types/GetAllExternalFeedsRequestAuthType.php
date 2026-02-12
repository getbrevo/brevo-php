<?php

namespace Brevo\ExternalFeeds\Types;

enum GetAllExternalFeedsRequestAuthType: string
{
    case Basic = "basic";
    case Token = "token";
    case NoAuth = "noAuth";
}
