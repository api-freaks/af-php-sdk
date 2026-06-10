<?php

namespace Apifreaks\Types;

enum CommodityLatestRatesRequestUpdates: string
{
    case TenM = "10m";
    case OneM = "1m";
}
