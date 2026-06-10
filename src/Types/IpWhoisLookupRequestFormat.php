<?php

namespace Apifreaks\Types;

enum IpWhoisLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
