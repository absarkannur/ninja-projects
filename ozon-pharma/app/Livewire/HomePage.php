<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\FacilitiesCategory;
use App\Models\TherapeuticCategories;
use App\Models\Articles;
use App\Models\OurNumbers;

class HomePage extends Component {

    #[Title('OZON Pharmaceuticals | Home')]

    public function render() {

        $facilities_category = FacilitiesCategory::get();
        $therapeutic_dategories = TherapeuticCategories::get();
        $articles = Articles::orderBy( 'created_at', 'DESC' )->paginate(3);
        $ourNumbers = OurNumbers::get();

        return view('livewire.home-page', [
            'facilities_category' => $facilities_category,
            'therapeutic_dategories' => $therapeutic_dategories,
            'articles' => $articles,
            "ourNumbers" => $ourNumbers
        ]);

    }

}
