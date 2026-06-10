<?php

namespace Apifreaks\Types;

enum DomainDnsHistoryRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
