<?php

namespace Apifreaks\Types;

enum ScreenshotCaptureRequestOutput: string
{
    case Json = "json";
    case Image = "image";
}
