<?php

namespace Apifreaks\Types;

enum DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
