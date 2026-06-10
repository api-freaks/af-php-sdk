<?php

namespace Apifreaks\Types;

enum DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStringsDnsType: string
{
    case Txt = "TXT";
    case Spf = "SPF";
}
