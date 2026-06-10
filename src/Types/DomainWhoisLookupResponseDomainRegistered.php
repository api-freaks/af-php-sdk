<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupResponseDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
