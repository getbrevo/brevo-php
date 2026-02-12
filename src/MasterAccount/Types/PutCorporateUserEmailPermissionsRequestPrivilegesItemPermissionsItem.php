<?php

namespace Brevo\MasterAccount\Types;

enum PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem: string
{
    case All = "all";
    case None = "none";
    case Create = "create";
    case EditDelete = "edit_delete";
    case CreateAlerts = "create_alerts";
    case DownloadData = "download_data";
    case MyLooks = "my_looks";
    case ExploreCreate = "explore_create";
}
