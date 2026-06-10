<?php

namespace Apifreaks\Types;

enum GetFlagsRequestType: string
{
    case Country = "country";
    case Organization = "organization";
}
