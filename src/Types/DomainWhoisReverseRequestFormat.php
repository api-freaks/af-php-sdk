<?php

namespace Apifreaks\Types;

enum DomainWhoisReverseRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
