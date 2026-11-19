<?php

namespace Apifreaks\Types;

enum BulkEmailValidateResponseEmailResponseItemValidEmail: string
{
    case Valid = "valid";
    case AcceptAll = "accept_all";
    case Invalid = "invalid";
    case InvalidEmail = "INVALID_EMAIL";
    case Unknown = "unknown";
    case Risky = "risky";
    case AppServerBlocked = "app_server_blocked";
}
