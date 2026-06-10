<?php

namespace Apifreaks\Types;

enum ZipcodeSearchByRadiusRequestUnit: string
{
    case M = "m";
    case Km = "km";
    case Mi = "mi";
    case Ft = "ft";
    case Yd = "yd";
    case In = "in";
}
