<?php

namespace Apifreaks\Types;

enum GetCreditsUsageResponseSubStatus: string
{
    case Active = "active";
    case Overdue = "overdue";
    case Cancelled = "cancelled";
    case Deactivated = "deactivated";
}
