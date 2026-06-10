<?php

namespace Apifreaks\Types;

enum TimezoneLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
