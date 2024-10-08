<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class DonutChart extends ApexChartWidget
{
    /**
     * Chart Id
     */
    protected static ?string $chartId = 'donutChart';

    /**
     * Widget Title
     */
    protected static ?string $heading = 'Controle de Conversões';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'donut',
                'height' => 300,
            ],
            'series' => [10,90],
            'labels' => ['Clicks','Conversões'],
            'legend' => [
                'labels' => [
                    'colors' => '#9ca3af',
                    'fontWeight' => 600,
                ],
            ],
        ];
    }
}
