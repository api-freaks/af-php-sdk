<?php

namespace Apifreaks\Types;

enum BulkScreenshotCaptureRequestUrlsItemScrollSpeed: string
{
    case Normal = "normal";
    case Fast = "fast";
    case Slow = "slow";
}
