<?php

namespace Apifreaks\Types;

enum BulkDomainDnsLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
