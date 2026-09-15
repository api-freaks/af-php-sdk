<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
