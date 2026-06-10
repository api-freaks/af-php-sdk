<?php

namespace Apifreaks\Types;

enum ReadabilityScoreRequestTarget: string
{
    case General = "general";
    case Professional = "professional";
    case Academic = "academic";
    case Technical = "technical";
}
