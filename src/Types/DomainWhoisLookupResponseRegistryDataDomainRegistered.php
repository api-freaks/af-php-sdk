<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupResponseRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
