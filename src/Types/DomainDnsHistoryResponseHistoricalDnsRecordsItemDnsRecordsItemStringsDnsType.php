<?php

namespace Apifreaks\Types;

enum DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemStringsDnsType: string
{
    case Txt = "TXT";
    case Spf = "SPF";
}
