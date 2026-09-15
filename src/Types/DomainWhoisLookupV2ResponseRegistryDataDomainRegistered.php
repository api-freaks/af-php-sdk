<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupV2ResponseRegistryDataDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
