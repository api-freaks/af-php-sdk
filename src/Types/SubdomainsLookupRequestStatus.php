<?php

namespace Apifreaks\Types;

enum SubdomainsLookupRequestStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
