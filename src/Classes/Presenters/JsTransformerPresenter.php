<?php

namespace Techcyclist\Highstock\Classes\Presenters;

class JsTransformerPresenter
{

    public $accessibility = [];
    public $annotations = [];
    public $boost = [];
    public $chart = [];
    public $colors = [];
    public $container = 'container';
    public $credits = [];
    public $data = [];
    public $defs = [];
    public $drilldown = [];
    public $exporting = [];
    public $labels = [];
    public $legend = [];
    public $loading = [];
    public $navigation = [];
    public $navigator = [];
    public $nodata = [];
    public $plotOptions = [];
    public $rangeSelector = [];
    public $responsive = [];
    public $scrollbar = [];
    public $series = [];
    public $stockTools = [];
    public $subtitle = [];
    public $time = [];
    public $title = [];
    public $tooltip = [];
    public $transform = [];
    public $yAxis = [];
    public $xAxis = [];
    
    public function __construct()
    {
        $this->transform = '';
    }

    public function credits()
    {
        $data = $this->credits;

        $this->credits = !empty($data) ? 'credits: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_accessibility()
    {
        $data = $this->accessibility;

        $this->accessibility = !empty($data) ? 'accessibility: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_annotations()
    {
        $data = $this->annotations;

        $this->annotations = !empty($data) ? 'annotations: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_boost()
    {
        $data = $this->boost;

        $this->boost = !empty($data) ? 'boost: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_chart()
    {
        $data = $this->chart;

        $this->chart = !empty($data) ? 'chart: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_colors()
    {
        $data = $this->colors;

        $this->colors = !empty($data) ? 'colors: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_data()
    {
        $data = $this->data;

        $this->data = !empty($data) ? 'data: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_defs()
    {
        $data = $this->defs;

        $this->defs = !empty($data) ? 'defs: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_drilldown()
    {
        $data = $this->drilldown;

        $this->drilldown = !empty($data) ? 'drilldown: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_exporting()
    {
        $data = $this->exporting;

        $this->exporting = !empty($data) ? 'exporting: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_labels()
    {
        $data = $this->labels;

        $this->labels = !empty($data) ? 'labels: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_legend()
    {
        $data = $this->legend;

        $this->legend = !empty($data) ? 'legend: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_loading()
    {
        $data = $this->loading;

        $this->loading = !empty($data) ? 'loading: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_navigation()
    {
        $data = $this->navigation;

        $this->navigation = !empty($data) ? 'navigation: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_navigator()
    {
        $data = $this->navigator;

        $this->navigator = !empty($data) ? 'navigator: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_no_data()
    {
        $data = $this->noData;

        $this->noData = !empty($data) ? 'noData: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_plot_options()
    {
        $data = $this->plotOptions;

        $this->plotOptions = !empty($data) ? 'plotOptions: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_range_selector()
    {
        $data = $this->rangeSelector;

        $this->rangeSelector = !empty($data) ? 'rangeSelector: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_responsive()
    {
        $data = $this->responsive;

        $this->responsive = !empty($data) ? 'responsive: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_scrollbar()
    {
        $data = $this->scrollbar;

        $this->scrollbar = !empty($data) ? 'scrollbar: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_series()
    {
        $data = $this->series;

        $this->series = !empty($data) ? 'series: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_stock_tools()
    {
        $data = $this->stockTools;

        $this->stockTools = !empty($data) ? 'stockTools: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_sub_title()
    {
        $data = $this->subtitle;

        $this->subtitle = !empty($data) ? 'subtitle: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_time()
    {
        $data = $this->time;

        $this->time = !empty($data) ? 'time: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_title()
    {
        $data = $this->title;

        $this->title = !empty($data) ? 'title: '.json_encode($data, JSON_UNESCAPED_UNICODE).',' : null;

        return $this;
    }

    public function encode_tooltip()
    {
        $data = $this->tooltip;

        $this->tooltip = !empty($data) ? 'tooltip: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_x_axis()
    {
        $data = $this->xAxis;

        $this->xAxis = !empty($data) ? 'xAxis: '.json_encode($data).',' : null;

        return $this;
    }

    public function encode_y_axis()
    {
        $data = $this->yAxis;

        $this->yAxis = !empty($data) ? 'yAxis: '.json_encode($data).',' : null;

        return $this;
    }

    public function replacer($string)
    {
        $chars = [
            '\\n',
            '\\t',
            '"startJs:',
            '}"',
            '\\',
            ':endJs"',
        ];
        $replace = ['', '', '', '', ''];

        return str_replace($chars, $replace, $string);
    }

    public function transform()
    {
        $this->encode_accessibility();
        $this->encode_annotations();
        $this->encode_boost();
        $this->encode_chart();
        $this->encode_colors();
        $this->encode_credits();
        $this->encode_data();
        $this->encode_defs();
        $this->encode_drilldown();
        $this->encode_exporting();
        $this->encode_labels();
        $this->encode_legend();
        $this->encode_loading();
        $this->encode_navigation();
        $this->encode_navigator();
        $this->encode_nodata();
        $this->encode_plotOptions();
        $this->encode_rangeSelector();
        $this->encode_responsive();
        $this->encode_scrollbar();
        $this->encode_series();
        $this->encode_stockTools();
        $this->encode_subtitle();
        $this->encode_time();
        $this->encode_title();
        $this->encode_tooltip();
        $this->encode_transform();
        $this->encode_yAxis();
        $this->encode_xAxis();

        $allString = $this->title.
        $this->accessibility.
        $this->annotations.
        $this->boost.
        $this->chart.
        $this->colors.
        $this->credits.
        $this->data.
        $this->defs.
        $this->drilldown.
        $this->exporting.
        $this->labels.
        $this->legend.
        $this->loading.
        $this->navigation.
        $this->navigator.
        $this->nodata.
        $this->plotOptions.
        $this->rangeSelector.
        $this->responsive.
        $this->scrollbar.
        $this->series.
        $this->stockTools.
        $this->subtitle.
        $this->title.
        $this->tooltip.
        $this->transform.
        $this->yAxis.
        $this->xAxis.

        $allString = substr($allString, 0, -1);
        $allString = $this->replacer($allString);
        $generate = '<script type="text/javascript">';
        $generate .= 'Highcharts.stockChart({'.$allString.'});';
        $generate .= '</script>';

        return $generate;
    }
}
