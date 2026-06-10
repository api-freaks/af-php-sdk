<?php

namespace Apifreaks\Types;

enum DomainSslLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
