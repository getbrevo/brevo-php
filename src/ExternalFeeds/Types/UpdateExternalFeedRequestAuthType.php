<?php

namespace Brevo\ExternalFeeds\Types;

enum UpdateExternalFeedRequestAuthType: string
{
    case Basic = "basic";
    case Token = "token";
    case NoAuth = "noAuth";
}
