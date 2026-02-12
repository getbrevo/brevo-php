<?php

namespace Brevo\MasterAccount\Types;

enum PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature: string
{
    case UserManagement = "user_management";
    case Api = "api";
    case MyPlan = "my_plan";
    case AppsManagement = "apps_management";
    case Analytics = "analytics";
    case SubOrganizationGroups = "sub_organization_groups";
    case CreateSubOrganizations = "create_sub_organizations";
    case ManageSubOrganizations = "manage_sub_organizations";
    case Security = "security";
}
