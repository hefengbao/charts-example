<?php

namespace App\Http\Controllers\Echarts;

use App\Charts\Echarts;
use HeFengbao\Charts\Builder\ECharts\Chart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LineController extends Controller
{
    public function index()
    {
        $line_simple = new Echarts();
        //数组
        //$line_simple->dataset(['Mon' => 820, 'Tue' => 932, 'Wed' => 901, 'Thu' => 934, 'Fri' => 1290, 'Sat' => 1330, 'Sun' => 1320])->series(['line', 'line']);

        //集合
        $line_simple->dataset(
            collect(['Mon' => 720, 'Tue' => 832, 'Wed' => 801, 'Thu' => 834, 'Fri' => 1190, 'Sat' => 1230, 'Sun' => 1220])
        )->series(['line']);

        $area_basic = new Echarts();
        $area_basic->dataset(['Mon' => 820, 'Tue' => 932, 'Wed' => 901, 'Thu' => 934, 'Fri' => 1290, 'Sat' => 1330, 'Sun' => 1320])
            //->series(['line'])
            ->option('xAxis', [
                "boundaryGap" => false
            ])
            ->option('series', [
                [
                    "type" => "line",
                    "seriesLayoutBy" => 'row',
                    "areaStyle" => []
                ]
            ]);

        $line_smooth = new Echarts();
        $line_smooth->dataset(['Mon' => 820, 'Tue' => 932, 'Wed' => 901, 'Thu' => 934, 'Fri' => 1290, 'Sat' => 1330, 'Sun' => 1320])
            ->series(['line'])
            ->option('series', [
                ['smooth' => true]
            ]);

        $area_stack = new Echarts();
        $area_stack->dataset([
            ['name' => '邮件营销', '周一' => 120, '周二' => 132, '周三' => 101, '周四' => 134, '周五' => 90, '周六' => 230, '周日' => 210],
            ['name' => '联盟广告', '周一' => 220, '周二' => 182, '周三' => 191, '周四' => 234, '周五' => 290, '周六' => 330, '周日' => 310],
            ['name' => '视频广告', '周一' => 150, '周二' => 232, '周三' => 201, '周四' => 154, '周五' => 190, '周六' => 330, '周日' => 410],
            ['name' => '直接访问', '周一' => 320, '周二' => 332, '周三' => 301, '周四' => 334, '周五' => 390, '周六' => 330, '周日' => 320],
            ['name' => '搜索引擎', '周一' => 820, '周二' => 932, '周三' => 901, '周四' => 934, '周五' => 1290, '周六' => 1330, '周日' => 1320]
        ])->title('堆叠区域图')
            ->option('xAxis', [
                "boundaryGap" => false
            ])
            ->option('series', [
                [
                    'type' => 'line',
                    'stack' => '总量',
                    'areaStyle' => [
                        'normal' => []
                    ]
                ]
            ]);
        return view('echarts/line', compact('line_simple', 'area_basic', 'line_smooth', 'area_stack'));
    }
}