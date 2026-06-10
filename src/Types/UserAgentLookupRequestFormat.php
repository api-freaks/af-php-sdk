<?php

namespace Apifreaks\Types;

enum UserAgentLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
