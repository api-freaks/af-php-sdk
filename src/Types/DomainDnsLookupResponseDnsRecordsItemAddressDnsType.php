<?php

namespace Apifreaks\Types;

enum DomainDnsLookupResponseDnsRecordsItemAddressDnsType: string
{
    case A = "A";
    case Aaaa = "AAAA";
}
