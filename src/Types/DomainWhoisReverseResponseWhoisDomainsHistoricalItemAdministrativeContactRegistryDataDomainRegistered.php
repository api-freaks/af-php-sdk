<?php

namespace Apifreaks\Types;

enum DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
