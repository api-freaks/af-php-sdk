<?php

namespace Apifreaks\Types;

enum DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
