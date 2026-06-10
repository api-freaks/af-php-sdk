<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupResponseBulkWhoisResponseItemRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
