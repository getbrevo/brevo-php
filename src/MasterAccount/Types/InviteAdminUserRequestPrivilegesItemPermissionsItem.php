<?php

namespace Brevo\MasterAccount\Types;

enum InviteAdminUserRequestPrivilegesItemPermissionsItem: string
{
    case All = "all";
    case None = "none";
    case Create = "create";
    case EditDelete = "edit_delete";
    case DownloadData = "download_data";
    case CreateAlerts = "create_alerts";
}
