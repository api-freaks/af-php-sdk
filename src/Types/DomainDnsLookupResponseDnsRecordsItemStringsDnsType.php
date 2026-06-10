<?php

namespace Apifreaks\Types;

enum DomainDnsLookupResponseDnsRecordsItemStringsDnsType: string
{
    case Txt = "TXT";
    case Spf = "SPF";
}
