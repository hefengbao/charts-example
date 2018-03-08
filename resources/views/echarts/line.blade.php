@extends('master')

@section('content')
    <div class="row">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="http://echarts.baidu.com/examples/editor.html?c=line-simple" target="_blank">
                        Basic Line Chart
                    </a>
                </h3>
            </div>
            <div class="box-body">
                {!! $line_simple->container() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="http://echarts.baidu.com/examples/editor.html?c=area-basic" target="_blank">
                        Basic area chart
                    </a>
                </h3>
            </div>
            <div class="box-body">
                {!! $area_basic->container() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="http://echarts.baidu.com/examples/editor.html?c=line-smooth" target="_blank">
                        Smoothed Line Chart
                    </a>
                </h3>
            </div>
            <div class="box-body">
                {!! $line_smooth->container() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="http://echarts.baidu.com/examples/editor.html?c=area-stack" target="_blank">
                        Stacked area chart
                    </a>
                </h3>
            </div>
            <div class="box-body">
                {!! $area_stack->container() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! $line_simple->script() !!}
    {!! $area_basic->script() !!}
    {!! $line_smooth->script() !!}
    {!! $area_stack->script() !!}
@endsection