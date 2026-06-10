<?php

namespace Apifreaks\Types;

enum BulkUserAgentLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
