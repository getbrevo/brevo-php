<?php

namespace Brevo\CustomObjects\Types;

enum UpsertrecordsRequestRecordsItemAssociationsItemAction: string
{
    case Link = "link";
    case Unlink = "unlink";
}
