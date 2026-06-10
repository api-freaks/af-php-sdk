<?php

namespace Apifreaks\Types;

enum CurrencyConvertLatestRequestUpdates: string
{
    case OneD = "1d";
    case OneH = "1h";
    case TenM = "10m";
    case OneM = "1m";
}
