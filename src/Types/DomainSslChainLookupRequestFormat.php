<?php

namespace Apifreaks\Types;

enum DomainSslChainLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
