<?php

namespace Apifreaks\Types;

enum IpSecurityLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
