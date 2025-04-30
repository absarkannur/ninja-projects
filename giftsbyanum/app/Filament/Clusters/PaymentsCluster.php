<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class PaymentsCluster extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = "Payment Option";

    protected static ?string $navigationGroup = "Store";
    protected static ?string $navigationParentItem = "Customers";
    protected static ?int $navigationSort = 8;

}
