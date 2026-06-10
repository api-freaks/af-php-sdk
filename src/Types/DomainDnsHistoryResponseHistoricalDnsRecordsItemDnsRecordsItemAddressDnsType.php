<?php

namespace Apifreaks\Types;

enum DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAddressDnsType: string
{
    case A = "A";
    case Aaaa = "AAAA";
}
