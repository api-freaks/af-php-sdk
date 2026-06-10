<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupResponseBulkWhoisResponseItemDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
