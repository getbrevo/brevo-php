<?php

namespace Brevo\MasterAccount\Types;

enum InviteAdminUserRequestPrivilegesItemFeature: string
{
    case MyPlan = "my_plan";
    case Api = "api";
    case UserManagement = "user_management";
    case AppManagement = "app_management";
    case SubOrganizationGroups = "sub_organization_groups";
    case CreateSubOrganizations = "create_sub_organizations";
    case ManageSubOrganizations = "manage_sub_organizations";
    case Analytics = "analytics";
    case Security = "security";
}
