<?php

namespace Apifreaks\Types;

enum VatRateByIpRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
