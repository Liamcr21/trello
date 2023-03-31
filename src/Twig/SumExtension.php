<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SumExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('sum', [$this, 'sum']),
        ];
    }

    public function sum($array)
    {
        return array_sum($array);
    }
}