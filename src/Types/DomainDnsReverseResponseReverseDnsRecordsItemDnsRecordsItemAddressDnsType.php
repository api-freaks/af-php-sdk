<?php

namespace Apifreaks\Types;

enum DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddressDnsType: string
{
    case A = "A";
    case Aaaa = "AAAA";
}
