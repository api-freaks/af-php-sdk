<?php

namespace Apifreaks\Types;

enum DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
