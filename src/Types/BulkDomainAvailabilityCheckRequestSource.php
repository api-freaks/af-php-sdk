<?php

namespace Apifreaks\Types;

enum BulkDomainAvailabilityCheckRequestSource: string
{
    case Dns = "dns";
    case Whois = "whois";
}
