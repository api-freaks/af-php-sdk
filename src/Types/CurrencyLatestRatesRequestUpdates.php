<?php

namespace Apifreaks\Types;

enum CurrencyLatestRatesRequestUpdates: string
{
    case OneM = "1m";
    case TenM = "10m";
    case OneH = "1h";
    case OneD = "1d";
}
