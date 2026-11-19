<?php

namespace Apifreaks\Types;

enum GetCreditsUsageResponseUserStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Deleted = "deleted";
}
