<?php

namespace Apifreaks\Types;

enum ZipcodeLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
