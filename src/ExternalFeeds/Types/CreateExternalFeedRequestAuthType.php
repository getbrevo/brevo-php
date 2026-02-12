<?php

namespace Brevo\ExternalFeeds\Types;

enum CreateExternalFeedRequestAuthType: string
{
    case Basic = "basic";
    case Token = "token";
    case NoAuth = "noAuth";
}
