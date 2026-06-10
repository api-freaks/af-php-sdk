<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
