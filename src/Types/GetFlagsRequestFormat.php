<?php

namespace Apifreaks\Types;

enum GetFlagsRequestFormat: string
{
    case Png = "png";
    case Webp = "webp";
    case Svg = "svg";
}
