<?php

namespace Apifreaks\Types;

enum ScreenshotCaptureRequestFileType: string
{
    case Png = "PNG";
    case Jpeg = "JPEG";
    case Webp = "WEBP";
    case Pdf = "PDF";
    case Mp4 = "mp4";
    case Gif = "gif";
    case Webm = "webm";
}
