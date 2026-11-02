<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductCount extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Quantidade de produtos', Product::query()->count()),
            Stat::make('Quantidade de variações', ProductVariation::query()->count()),
            Stat::make('Quantidade de categorias', Category::query()->count()),
        ];
    }
}
