<?php

namespace Apifreaks\Types;

enum DomainAvailabilityCheckRequestSource: string
{
    case Dns = "dns";
    case Whois = "whois";
}
