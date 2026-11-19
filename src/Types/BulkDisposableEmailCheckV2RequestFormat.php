<?php

namespace Apifreaks\Types;

enum BulkDisposableEmailCheckV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
