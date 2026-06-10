<?php

namespace Apifreaks\Types;

enum ReadabilityScoreResponseSentenceReadabilityItemReadabilityLevel: string
{
    case VeryEasy = "Very Easy";
    case Easy = "Easy";
    case Medium = "Medium";
    case Hard = "Hard";
    case VeryHard = "Very Hard";
}
