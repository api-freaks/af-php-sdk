<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Standard readability formula scores, keyed by metric name. Metrics that cannot be computed for the supplied text are omitted.
 */
class ReadabilityScoreResponseReadabilityScores extends JsonSerializableType
{
    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresFleschReadingEase $fleschReadingEase Flesch Reading Ease
     */
    #[JsonProperty('flesch_reading_ease')]
    public ?ReadabilityScoreResponseReadabilityScoresFleschReadingEase $fleschReadingEase;

    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresFleschKincaidGrade $fleschKincaidGrade Flesch-Kincaid Grade Level
     */
    #[JsonProperty('flesch_kincaid_grade')]
    public ?ReadabilityScoreResponseReadabilityScoresFleschKincaidGrade $fleschKincaidGrade;

    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresGunningFog $gunningFog Gunning Fog Index
     */
    #[JsonProperty('gunning_fog')]
    public ?ReadabilityScoreResponseReadabilityScoresGunningFog $gunningFog;

    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresSmogIndex $smogIndex SMOG Index
     */
    #[JsonProperty('smog_index')]
    public ?ReadabilityScoreResponseReadabilityScoresSmogIndex $smogIndex;

    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresColemanLiauIndex $colemanLiauIndex Coleman-Liau Index
     */
    #[JsonProperty('coleman_liau_index')]
    public ?ReadabilityScoreResponseReadabilityScoresColemanLiauIndex $colemanLiauIndex;

    /**
     * @var ?ReadabilityScoreResponseReadabilityScoresAutomatedReadabilityIndex $automatedReadabilityIndex Automated Readability Index (ARI)
     */
    #[JsonProperty('automated_readability_index')]
    public ?ReadabilityScoreResponseReadabilityScoresAutomatedReadabilityIndex $automatedReadabilityIndex;

    /**
     * @param array{
     *   fleschReadingEase?: ?ReadabilityScoreResponseReadabilityScoresFleschReadingEase,
     *   fleschKincaidGrade?: ?ReadabilityScoreResponseReadabilityScoresFleschKincaidGrade,
     *   gunningFog?: ?ReadabilityScoreResponseReadabilityScoresGunningFog,
     *   smogIndex?: ?ReadabilityScoreResponseReadabilityScoresSmogIndex,
     *   colemanLiauIndex?: ?ReadabilityScoreResponseReadabilityScoresColemanLiauIndex,
     *   automatedReadabilityIndex?: ?ReadabilityScoreResponseReadabilityScoresAutomatedReadabilityIndex,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fleschReadingEase = $values['fleschReadingEase'] ?? null;
        $this->fleschKincaidGrade = $values['fleschKincaidGrade'] ?? null;
        $this->gunningFog = $values['gunningFog'] ?? null;
        $this->smogIndex = $values['smogIndex'] ?? null;
        $this->colemanLiauIndex = $values['colemanLiauIndex'] ?? null;
        $this->automatedReadabilityIndex = $values['automatedReadabilityIndex'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
