<?php

namespace Apifreaks\Types;

enum BulkIpSecurityLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
