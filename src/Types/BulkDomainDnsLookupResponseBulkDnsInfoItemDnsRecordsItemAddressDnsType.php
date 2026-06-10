<?php

namespace Apifreaks\Types;

enum BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAddressDnsType: string
{
    case A = "A";
    case Aaaa = "AAAA";
}
