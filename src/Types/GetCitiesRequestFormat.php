<?php

namespace Apifreaks\Types;

enum GetCitiesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
