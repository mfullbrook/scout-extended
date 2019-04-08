<?php

namespace Tests\Features\Fixtures;

use App\Thread;
use Algolia\ScoutExtended\Splitters\HtmlSplitter;

class ThreadMultipleSplits extends Thread
{
    protected $table = 'threads';

    public function splitBody($value)
    {

        return HtmlSplitter::by('h1');
    }

    public function splitSlug($value): array
    {
        return explode('-', $value);
    }

    public function splitDescriptionAtTheLetter($value)
    {
        return range(1, $value);
    }
}
