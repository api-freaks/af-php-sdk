<?php

namespace Apifreaks\Types;

enum DomainDnsLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
