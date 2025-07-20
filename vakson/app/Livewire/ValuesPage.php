<?php

namespace App\Livewire;

use App\Models\ValuesPage as ModelsValuesPage;
use Livewire\Component;

class ValuesPage extends Component
{
    public function render()
    {

        $data = ModelsValuesPage::first();

        return view('livewire.values-page',[
            'values_data' => $data
        ]);
    }
}
