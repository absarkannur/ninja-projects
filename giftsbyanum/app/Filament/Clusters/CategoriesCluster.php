<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class CategoriesCluster extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = "Store";
    protected static ?string $navigationParentItem = "Products";
    protected static ?int $navigationSort = 3;

}
