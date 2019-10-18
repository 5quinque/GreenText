<?php

namespace Linnit\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class GreenTextExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('greentext', [$this, 'formatQuote'], ['is_safe' => ['html']]),
        ];
    }
    public function formatQuote($string, $colour = "#789922")
    {
        return preg_replace('/(^&gt;.+$)/m', "<span style='color: {$colour};'>$1</span>", $string);
    }
}
