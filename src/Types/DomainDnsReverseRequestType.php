<?php

namespace Apifreaks\Types;

enum DomainDnsReverseRequestType: string
{
    case A = "A";
    case Aaaa = "AAAA";
    case Mx = "MX";
    case Ns = "NS";
    case Soa = "SOA";
    case Spf = "SPF";
    case Txt = "TXT";
    case Cname = "CNAME";
}
