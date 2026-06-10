<?php

namespace Apifreaks\Types;

enum DomainAvailabilitySuggestionsRequestSource: string
{
    case Dns = "dns";
    case Whois = "whois";
}
