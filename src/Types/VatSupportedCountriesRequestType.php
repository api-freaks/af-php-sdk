<?php

namespace Apifreaks\Types;

enum VatSupportedCountriesRequestType: string
{
    case Iban = "IBAN";
    case Swift = "SWIFT";
    case Vat = "VAT";
}
