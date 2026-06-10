<?php

namespace Apifreaks\Types;

enum DomainWhoisHistoryRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
