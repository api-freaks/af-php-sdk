<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
