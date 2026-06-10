<?php

namespace Apifreaks\Types;

enum CommoditySymbolsResponseSymbolsItemUpdateInterval: string
{
    case PerSecond = "PER_SECOND";
    case PerMinute = "PER_MINUTE";
}
