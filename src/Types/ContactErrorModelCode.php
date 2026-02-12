<?php

namespace Brevo\Types;

enum ContactErrorModelCode: string
{
    case InvalidParameter = "invalid_parameter";
    case MissingParameter = "missing_parameter";
    case DocumentNotFound = "document_not_found";
    case AccountInProcess = "account_in_process";
    case DuplicateParameter = "duplicate_parameter";
    case MethodNotAllowed = "method_not_allowed";
    case OutOfRange = "out_of_range";
}
