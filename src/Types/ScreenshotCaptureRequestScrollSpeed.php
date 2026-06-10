<?php

namespace Apifreaks\Types;

enum ScreenshotCaptureRequestScrollSpeed: string
{
    case Normal = "normal";
    case Fast = "fast";
    case Slow = "slow";
}
