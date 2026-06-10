<?php

namespace Apifreaks\Types;

enum GetAdminLevelsRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
