<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
