<?php

namespace Techcyclist\Highstock\Classes\Presenters;

class ChartPresenter
{
    public $display;
    public $initJs;
    public $title;

    public function __construct()
    {
        $this->display = '';
        $this->js = new InitJsPresenter();
        $this->js->highstock = config('highstock.series_label_js');
        $this->js->seriesLabel = config('highstock.highstock_js');
        $this->js->exporting = config('highstock.exporting_js');
        $this->js->exportData = config('highstock.export_data_js');
        $this->container = new ContainerPresenter();
        $this->transform = new JsTransformerPresenter();
        $this->title = [];
    }

    public function highstock_js($bool = true)
    {
        $this->js->highstock = $bool;

        return $this;
    }

    public function series_label_js($bool = true)
    {
        $this->js->seriesLabel = $bool;

        return $this;
    }

    public function exporting_js($bool = true)
    {
        $this->js->exporting = $bool;

        return $this;
    }

    public function export_data_js($bool = true)
    {
        $this->js->exportData = $bool;

        return $this;
    }

    public function getInitJs()
    {
        $this->display .= $this->js->generate();
        $this->js->init = false;

        return $this;
    }

    public function container($container = 'container')
    {
        $this->transform->container = $container;

        return $this;
    }

    public function getTransform()
    {
        $this->display .= $this->transform->transform();

        return $this;
    }

    public function tes($tes)
    {
        $this->display .= $tes;

        return $this;
    }

    public function accessibility($accessibility = [])
    {
        $this->transform->accessibility = $accessibility;

        return $this;
    }

    public function annotations($annotations = [])
    {
        $this->transform->annotations = $annotations;

        return $this;
    }

    public function boost($boost = [])
    {
        $this->transform->boost = $boost;

        return $this;
    }

    public function chart($series = [])
    {
        $this->transform->chart = $series;

        return $this;
    }

    public function colors($colors = [])
    {
        $this->transform->colors = $colors;

        return $this;
    }

    public function data($data = [])
    {
        $this->transform->data = $data;

        return $this;
    }

    public function defs($defs = [])
    {
        $this->transform->defs = $defs;

        return $this;
    }

    public function drilldown($drilldown = [])
    {
        $this->transform->drilldown = $drilldown;

        return $this;
    }

    public function exporting($exporting = [])
    {
        $this->transform->exporting = $exporting;

        return $this;
    }

    public function labels($labels = [])
    {
        $this->transform->labels = $labels;

        return $this;
    }

    public function legend($legend = [])
    {
        $this->transform->legend = $legend;

        return $this;
    }

    public function loading($loading = [])
    {
        $this->transform->loading = $loading;

        return $this;
    }

    public function navigation($navigation = [])
    {
        $this->transform->navigation = $navigation;

        return $this;
    }

    public function navigator($navigator = [])
    {
        $this->transform->navigator = $navigator;

        return $this;
    }

    public function noData($nodata = [])
    {
        $this->transform->noData = $nodata;

        return $this;
    }

    public function plotOptions($plotoptions = [])
    {
        $this->transform->plotOptions = $plotoptions;

        return $this;
    }

    public function rangeSelector($rangeselector = [])
    {
        $this->transform->rangeSelector = $rangeselector;

        return $this;
    }

    public function responsive($responsive = [])
    {
        $this->transform->responsive = $responsive;

        return $this;
    }

    public function scrollbar($scrollbar = [])
    {
        $this->transform->scrollbar = $scrollbar;

        return $this;
    }

    public function series($series = [])
    {
        $this->transform->series = $series;

        return $this;
    }

    public function stockTools($stocktools = [])
    {
        $this->transform->stockTools = $stocktools;

        return $this;
    }

    public function subtitle($subtitle = [])
    {
        $this->transform->subtitle = $subtitle;

        return $this;
    }

    public function time($time = [])
    {
        $this->transform->time = $time;

        return $this;
    }

    public function title($title = [])
    {
        $this->transform->title = $title;

        return $this;
    }

    public function tooltip($tooltip = [])
    {
        $this->transform->tooltip = $tooltip;

        return $this;
    }

    public function xAxis($data = [])
    {
        $this->transform->xAxis = $data;

        return $this;
    }

    public function yAxis($data = [])
    {
        $this->transform->yAxis = $data;

        return $this;
    }

    public function display()
    {
        $this->getInitJs();
        $this->getTransform();
        $display = $this->display;
        $this->display = null;

        return $display;
    }
}
