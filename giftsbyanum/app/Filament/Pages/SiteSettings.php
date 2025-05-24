<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Sites;
use Illuminate\Contracts\View\View;

class SiteSettings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.site-settings';
    protected static ?string $navigationGroup = "Settings";
    protected static ?int $navigationSort = 106;

    public $delivery_charge = 0;
    public $delivery_condition = 0;

    public function mount(){
        $sites = Sites::find(1);
        $this->delivery_charge = $sites['default_delivery_charge'];
        $this->delivery_condition = $sites['delivery_condition'];
    }

    public function submit(){

        $this->validate([
            'delivery_charge' => 'required|numeric',
            'delivery_condition' => 'required|numeric',
        ]);

        $site_settings = Sites::find(1);
        $site_settings->default_delivery_charge = intval($this->delivery_charge);
        $site_settings->delivery_condition = intval($this->delivery_condition);
        $site_settings->update();

    }

    public function getHeader(): ?View
    {
        return view('filament.pages.site-settings');
    }

}
