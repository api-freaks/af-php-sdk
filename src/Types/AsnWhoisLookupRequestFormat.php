<?php

namespace Apifreaks\Types;

enum AsnWhoisLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
