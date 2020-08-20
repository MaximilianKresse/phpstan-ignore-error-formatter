<?php

declare(strict_types=1);

namespace MaximilianKresse\PhpstanIgnoreErrorFormatter;

use PHPStan\Command\AnalysisResult;
use PHPStan\Command\ErrorFormatter\ErrorFormatter;
use PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter;
use PHPStan\Command\Output;

class TeamcityIgnoreErrorFormatter implements ErrorFormatter
{
    private TeamcityErrorFormatter $errorFormatter;

    public function __construct(TeamcityErrorFormatter $errorFormatter)
    {
        $this->errorFormatter = $errorFormatter;
    }

    public function formatErrors(AnalysisResult $analysisResult, Output $output): int
    {
        $this->errorFormatter->formatErrors($analysisResult, $output);
        return 0;
    }
}
