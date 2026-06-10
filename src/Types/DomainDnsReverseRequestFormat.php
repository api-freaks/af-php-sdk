<?php

namespace Apifreaks\Types;

enum DomainDnsReverseRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
