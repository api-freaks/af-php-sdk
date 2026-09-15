<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupV2ResponseDomainRegistered: string
{
    case Yes = "yes";
    case No = "no";
    case Restricted = "restricted";
}
