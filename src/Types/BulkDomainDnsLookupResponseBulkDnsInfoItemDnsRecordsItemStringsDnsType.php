<?php

namespace Apifreaks\Types;

enum BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStringsDnsType: string
{
    case Txt = "TXT";
    case Spf = "SPF";
}
