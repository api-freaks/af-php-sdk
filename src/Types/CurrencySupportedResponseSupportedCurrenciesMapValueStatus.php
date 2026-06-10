<?php

namespace Apifreaks\Types;

enum CurrencySupportedResponseSupportedCurrenciesMapValueStatus: string
{
    case Available = "AVAILABLE";
    case Depreciated = "DEPRECIATED";
}
