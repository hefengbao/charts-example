<?php

namespace App\Charts;

use HeFengbao\Charts\Builder\ECharts\Chart;

class Echarts extends Chart
{
    public function __construct()
    {
        parent::__construct();
        $this->theme('light')->height(400)->loaderColor('yellow');
    }
}