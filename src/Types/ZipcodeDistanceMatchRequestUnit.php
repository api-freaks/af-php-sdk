<?php

namespace Apifreaks\Types;

enum ZipcodeDistanceMatchRequestUnit: string
{
    case M = "m";
    case Km = "km";
    case Mi = "mi";
    case Ft = "ft";
    case Yd = "yd";
    case In = "in";
}
